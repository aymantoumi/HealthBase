@extends('layouts.main')

@section('Content')
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
            <table>
                <tr class="titles">
                    <th>CIN</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Category</th>
                    <th>Phone Number</th>
                    <th>Payment</th>
                    <th>Date</th>
                </tr>
                @php
                    use Carbon\Carbon;
                @endphp

                @foreach ($patients as $patient)
                    @php
                        $birth_date = Carbon::parse($patient->Birth_Date);
                        $age = $birth_date->diffInYears(Carbon::now());
                    @endphp
                    <tr>
                        <td>{{ $patient->CIN }}</td>
                        <td>{{ $patient->First_Name }}</td>
                        <td>{{ $patient->Last_Name }}</td>
                        <td>{{ $age }}</td>
                        <td>{{ $patient->Gender }}</td>
                        <td>{{ $patient->Category }}</td>
                        <td>{{ $patient->Phone }}</td>
                        <td>{{ $patient->Payment }}</td>
                        <td>{{ $patient->created_at }}</td>
                    </tr>
                @endforeach

            </table>
        </div>

    </section>
@endsection
