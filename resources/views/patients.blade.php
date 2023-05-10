@extends('layouts.main')

@section('Content')
    @php
        use Carbon\Carbon;
    @endphp

    <section class="patients-section-grid">

        <div class="search-bar search-grid">
            <form action="" method="get">
                @csrf
                <input type="text" name="value" id="" placeholder="Search">
                <button type="submit">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACc0lEQVR4nO2ZS0tVURTHfxHevPSYNmgYdSWd9HIURCMRG6jDUCHoCzQIAvsCPbRUxIY6UnPeoHLgZ8jodYvQZhcC9drAHsaCdeGy2N6zz9k371bOHxbIPWetvf77/Nc+6ywhR44cOQ4buoBnwCpQVVvV3+RatCgA08AfYHcP+w1M6b1RQRJabpC4tTexkZhOkXzNJokEXSqNtATEp5MIMJEh+ZqNEwHeBRB4SwTYCiCwSQTYDCCwQQQ48BJ6GkDgCRGgM+AYvUAkmMpAQHqjaFDQ9sA3+ddAG5GhoO1BIzn90p2PLnlbE+N6wmypyd9jMWk+R44czcFRoB+YA95rwcs39EdgERgCikSKHs8+ah0Y/t+7eAm4o5+WrzSxCvDAcf8RYBT4m/LN/byZ749TwG1gCfjRYFFp9CxGA5q/mdDELwKzqtOkxWS8UnLIxo5dqsBD4DJwXO0K8AjYdsSVukiNs8B8yse+4pCa1fxn4FyDdWUDysZnDWhPk/xgxq+ueyZOv2Pnz3usX3I8iVu+yd/NUGw1u25izZnrIhtfPDa+Cz5O1xLGhEl22sT7YK6L5n1x1fjKeyIRLwOSFztm4lkZnkhB4GSWacZGIIFiwvglhIDURCJ2A+2MifepiRL6sh8Ebph4i+a6nPO+GDO+L/aDwH0Tb8hxjJY88ugAfhrfER8C64EE7OC26IhZTiDRoXKp96n41k9vAInyHqPzYce92zrg6q5rJbpVNnbno/i/wkzgk90BBlpJoO0wkKgV9ZpHshWVzY6DxE1ajHZtzBa01ahqTXzVo3KkrmAHHCS+ccAwaEh8b3VCWSCykZ2X5Pv+Ab3UZEKXwpYOAAAAAElFTkSuQmCC">
                </button>
            </form>
        </div>

        <div class="patients-list patients-list-grid">
            <div class="titles-grid">
                <div class="title">
                    <span>CIN</span>
                </div>
                <div class="title">
                    <span>First Name</span>
                </div>
                <div class="title">
                    <span>Last Name</span>
                </div>
                <div class="title">
                    <span>Age</span>
                </div>
                <div class="title">
                    <span>Gender</span>
                </div>
                <div class="title">
                    <span>Category</span>
                </div>
                <div class="title">
                    <span>Telephone</span>
                </div>
                <div class="title">
                    <span>Payment</span>
                </div>
                <div class="title">
                    <span>Date</span>
                </div>
            </div>
        </div>
        <div class="patients-box">

            @foreach ($patients as $patient)
                @php
                    $birth_date = Carbon::parse($patient->Birth_Date);
                    $age = $birth_date->diffInYears(Carbon::now());
                @endphp
                <div class="view">
                        <a href="{{ route('patients.show', $patient->id) }}">
                            <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABH0lEQVR4nO2UvU5CQRCFv4poxELFzkIT8TVAan9ewehDGJFefBsE30ILLbil2lzt4QEwk5xCNzOXxcJQ8CWT3MycM7uZ3buwYtnZBq6AIVAAU0Wh3KU0C7MO9NRsNidMcytPFnvAc0bjWRKvwMG85kfAl2MeAC1gQ9HWiFKdeZtR813gwzFdV2yo6+jfgYYnfgx2btSAe+ATKIG+csbI8T2QcB7MtaV636lZzjgOvKc/FygCUV310qlZztgMvON/XeAsELUrRnSnWifwnqTn4F27oWo1LVI6h1x1OX7R0BVLxV1ieo7+DdiJDM3gRxvpttQVnWDn5j0k46l4+sNT8QLsk8maRjPNaDwBbuRZmC3gQoc2VrOJvgeqmWbFEvMNriXJVcp1zQIAAAAASUVORK5CYII=">
                        </a>
                    <div>
                        <a href="{{ route('patients.show', $patient->id) }}">
                            {{ $patient->CIN }}
                        </a>
                    </div>
                </div>
                <div>{{ $patient->First_Name }}</div>
                <div>{{ $patient->Last_Name }}</div>
                <div>{{ $age }}</div>
                <div>{{ $patient->Gender }}</div>
                <div>
                    @foreach ($patient->actions as $action)
                        {{ $action->Action }}<br>
                    @endforeach
                </div>
                <div>{{ $patient->Phone }}</div>
                <div>{{ $patient->Payment }}</div>
                <div>{{ $patient->created_at }}</div>
            @endforeach
        </div>

    </section>
@endsection
