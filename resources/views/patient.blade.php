@extends('layouts.main')

@section('Content')
    @php
        use Carbon\Carbon;
        $birth_date = Carbon::parse($patient->Birth_Date);
        $age = $birth_date->diffInYears(Carbon::now());
    @endphp

    <div id="deleteModal" class="deleteModal">
        <form action="{{ route('actions.delete') }}" method="POST">
            <h2>Are you sure you want to delete this action?</h2>
            @csrf
            @method('DELETE')
            <input type="hidden" name="action_id" id="action_id">
            <div class="buttons">
                <button class="button s-button red">Delete Action</button>
                <button class="button  s-button cnacel-delete green">Cancel</button>
            </div>
        </form>
    </div>
    <section class="patient-update-grid patient-update-color ">
        <div class="patient-data patient-grid">
            <div class="side-card">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADVklEQVR4nO2cX2iVZRzHP2tzi0wsQaGLzBqoaKgXilJQUN1009UKCqIQTBBUFLppV3oj3QYisi4kKqIIrV0IxlJcEEq0q0WRQ2mi7mIVu8hK2E8e9juszja2s3Pe9/2d9/1+4AuHczjnvO/z4Xnf9/kLQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEII0Rq6gEc96bXIkQ7gWeA4MATcBqwut/yzY8Az/h3RYh4GjgJj8whYLOk7R4CVstI8HcBbwMQyRNTnDvCmaszyWQ180QIR9fkaWKPa0hgbgF8ykPHfy1ivpCyNJ4CbGcqoZRxYLymLX6Z+zkFGLT8BqyRlYT7PUUYtn0rI/PQVIKOWVyTl/3QDNwoUkm7yKyRllr0FyjBPau8I52oAId/LxgwbA8gwz1OSAgcCiDDPfgmBjwOIMM9HEgI/BBBhnisSMv+YhhWU1GVTeaYCiDBPOpbK82cAEeb5vfI2gN8CiDBP6i2oPJcDiDDPxcrbAE4FEGGekxICrwcQYZ7XJATWAv8GkPGPxtpn+SqAkLOqHbO8GEDIcxIS52lrSDLmsg24V4CMdP/aKiHz814BQt6VjIV5APgyRxlplosmYy/Cg8A3Oci4APSodiyNHuCzjOdipZkuogE6gMPA3RaK+As4KAvN0esNx+kmREx7w0+TGFrIDuBDaGj85A9gANjeygMRc+8vzwP9wCfAMDDiGfb3+r3lrfuEEEIIIYRoMx7xx91D3h5JjcVL/rh73TPi753z9sdBf/xNaxdFk3T5SOIHwLUWdJv86r/1gvZEaYxdwBlgMsPOxUn/j52qNguPg7wEDObQ7V6f74BXgU7JmSFdlkYLEGF1GfVjqSyP+QKZZnpxLYMMVnGHh3d86r8FzRSwj4oMzw4EKHBbYlINfoiS8rgvGbM2y4/Ak5SMzb71nrVpJoCnKQntLsPKJKUsMqwMUtbltBGZ5ZxxP7e2otMnollJ82279Ye9H6DQLOOcoE14OWDr2zLItJ9raLoz3k3UgmXMG7theSNAIVnOeZvAnA9QQJZz0ghl2DGNyB2GllH+jrqsoTdA4VhB2UJAdgcoGCsoewjIpgAFYwUl7RsZktMBCsdyTjrn8Mub+3ziQJnT5+cqhBBCEIH7XoeCBH5/4coAAAAASUVORK5CYII=">
                <caption>{{ $patient->First_Name . ' ' . $patient->Last_Name }}</caption>
                <span> Gender : {{ $patient->Gender }}</span>
                <span>Age : {{ $age }}</span>
            </div>
            <div class="main-card">
                <div class="content">
                    <span class="content-title">Full Name : </span>
                    <span>{{ $patient->First_Name . ' ' . $patient->Last_Name }}</span>
                </div>
                <div class="content">
                    <span class="content-title">CIN : </span>
                    <span>{{ $patient->CIN }}</span>
                </div>
                <div class="content">
                    <span class="content-title">Cantegory : </span>
                    <span>{{ $patient->Category }}</span>
                </div>
                <div class="content">
                    <span class="content-title">Birth Date : </span>
                    <span>{{ date('Y-m-d', strtotime($patient->Birth_Date)) }}</span>
                </div>
                <div class="content">
                    <span class="content-title">Gender : </span>
                    <span>{{ $patient->Gender }}</span>
                </div>
                <div class="content">
                    <span class="content-title">Phone Number : </span>
                    <span>{{ $patient->Phone }}</span>
                </div>
            </div>
            <div class="actions-card">
                @foreach ($patient->actions as $action)
                    <div class="action-card">
                        <h4>{{ $action->Action }}</h4>
                        <span>{{ date('m/d/Y', strtotime($action->created_at)) }}</span>
                        <span>{{ $action->Payment . ' DH' }}</span>
                        <button class="button s-button deleteAction red" value="{{ $action->id }}">Delete</button>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="patients-update-form main-form patients-update-form-grid shadow ">
            <form action="{{ route('patients.update', $patient->id) }}" method="POST">
                @csrf
                <h1>Patient Credential</h1>
                <div>
                    <input type="text" name="firstName" id="" value="{{ $patient->First_Name }}"
                        placeholder="First Name">
                    <input type="text" name="lastName" id="" value="{{ $patient->Last_Name }}"
                        placeholder="Last Name">
                </div>
                <div>
                    <input type="text" name="CIN" id="" value="{{ $patient->CIN }}" placeholder="CIN">
                    <input type="date" name="birthDate" value="{{ date('Y-m-d', strtotime($patient->Birth_Date)) }}"
                        id="">
                </div>
                <div>
                    <select name="gender" id="">
                        <option value="" disabled>Select Gender</option>
                        <option value="Male" {{ $patient->Gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $patient->Gender == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                    <select name="category" id="">
                        <option value="" disabled>Select Category</option>
                        <option value="Adult" {{ $patient->Category == 'Adult' ? 'selected' : '' }}>Adult</option>
                        <option value="Child" {{ $patient->Category == 'Child' ? 'selected' : '' }}>Child</option>
                    </select>
                    <input type="tel" name="phoneNumber" id="" value="{{ $patient->Phone }}"
                        placeholder="Phone Number">
                </div>
                <div>
                    <button type="submit" class="button green">Submit</button>
                    <button class="button red">Cancel</button>
                </div>
                @method('PUT')
            </form>
        </div>
        <div class="side-form">
            <form action="{{ route('patients.store') }}" method="POST">
                @csrf
                <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                <div>
                    <input type="number" name="payment" id="">
                </div>
                <div>
                    <select name="reason" id="">
                        <option value="" disabled selected>Select Reason</option>
                        <option value="Vists">Visit</option>
                        <option value="Control">Control</option>
                        <option value="Reservation">Reservation</option>
                        <option value="Medical  certification">Medical certification</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="button green">Add Action</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.deleteAction').click(function(e) {
                e.preventDefault();

                var actionID = $(this).val();
                $('#action_id').val(actionID);
                $('#deleteModal').css('z-index', 1);
                $('#deleteModal').modal('show');
            });

            $('.cnacel-delete').click(function (e) {
                e.preventDefault();

                $('#deleteModal').css('z-index', -1);
            });

        });
    </script>
@endsection
