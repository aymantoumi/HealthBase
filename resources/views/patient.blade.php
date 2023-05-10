@extends('layouts.main')

@section('Content')
    <section class="patient-update-grid patient-update-color ">
        <div class="patient-data">
            <div class="s-card"></div>
            <div class="main card"></div>
        </div>
        <div class="patients-update-form shadow">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <h1>Patient Credential</h1>
                <div>
                    <input type="text" name="firstName" id="" placeholder="First Name">
                    <input type="text" name="lastName" id="" placeholder="Last Name">
                </div>
                <div>
                    <input type="text" name="CIN" id="" placeholder="CIN">
                    <input type="date" name="birthDate" id="">
                </div>
                <div>
                    <select name="reason" id="">
                        <option value="" disabled selected>Select Reason</option>
                        <option value="Vists">Visit</option>
                        <option value="Control">Control</option>
                        <option value="Reservation">Reservation</option>
                        <option value="Medical  certification">Medical certification</option>
                    </select>
                    <select name="gender" id="" >
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <select name="category" id="">
                        <option value="" disabled selected>Select Category</option>
                        <option value="Adult">Adult</option>
                        <option value="Child">Child</option>
                    </select>
                </div>
                <div>
                    <input type="tel" name="phoneNumber" id="" placeholder="Phone Number">
                    <input type="number" name="payment" id="" placeholder="Payment">
                </div>
                <div>
                    <button type="submit" class="button green">Submit</button>
                    <button class="button red">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection
