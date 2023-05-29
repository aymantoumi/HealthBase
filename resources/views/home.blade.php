@extends('layouts.main')

@section('Content')
    <section class="home-grid home-color">
        <div class="total-patients shadow grid-card">
            <div class="icon">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADVklEQVR4nO2cX2iVZRzHP2tzi0wsQaGLzBqoaKgXilJQUN1009UKCqIQTBBUFLppV3oj3QYisi4kKqIIrV0IxlJcEEq0q0WRQ2mi7mIVu8hK2E8e9juszja2s3Pe9/2d9/1+4AuHczjnvO/z4Xnf9/kLQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEII0Rq6gEc96bXIkQ7gWeA4MATcBqwut/yzY8Az/h3RYh4GjgJj8whYLOk7R4CVstI8HcBbwMQyRNTnDvCmaszyWQ180QIR9fkaWKPa0hgbgF8ykPHfy1ivpCyNJ4CbGcqoZRxYLymLX6Z+zkFGLT8BqyRlYT7PUUYtn0rI/PQVIKOWVyTl/3QDNwoUkm7yKyRllr0FyjBPau8I52oAId/LxgwbA8gwz1OSAgcCiDDPfgmBjwOIMM9HEgI/BBBhnisSMv+YhhWU1GVTeaYCiDBPOpbK82cAEeb5vfI2gN8CiDBP6i2oPJcDiDDPxcrbAE4FEGGekxICrwcQYZ7XJATWAv8GkPGPxtpn+SqAkLOqHbO8GEDIcxIS52lrSDLmsg24V4CMdP/aKiHz814BQt6VjIV5APgyRxlplosmYy/Cg8A3Oci4APSodiyNHuCzjOdipZkuogE6gMPA3RaK+As4KAvN0esNx+kmREx7w0+TGFrIDuBDaGj85A9gANjeygMRc+8vzwP9wCfAMDDiGfb3+r3lrfuEEEIIIYRoMx7xx91D3h5JjcVL/rh73TPi753z9sdBf/xNaxdFk3T5SOIHwLUWdJv86r/1gvZEaYxdwBlgMsPOxUn/j52qNguPg7wEDObQ7V6f74BXgU7JmSFdlkYLEGF1GfVjqSyP+QKZZnpxLYMMVnGHh3d86r8FzRSwj4oMzw4EKHBbYlINfoiS8rgvGbM2y4/Ak5SMzb71nrVpJoCnKQntLsPKJKUsMqwMUtbltBGZ5ZxxP7e2otMnollJ82279Ye9H6DQLOOcoE14OWDr2zLItJ9raLoz3k3UgmXMG7theSNAIVnOeZvAnA9QQJZz0ghl2DGNyB2GllH+jrqsoTdA4VhB2UJAdgcoGCsoewjIpgAFYwUl7RsZktMBCsdyTjrn8Mub+3ziQJnT5+cqhBBCEIH7XoeCBH5/4coAAAAASUVORK5CYII=">
            </div>
            <div class="title">
                <h2>Total Patients</h2>
            </div>
            <div class="value">
                <h1>
                    {{ $TotalPatients }}
                </h1>
            </div>
        </div>
        <div class="patients-waiting shadow grid-card">
            <div class="icon">
                <img
                    src="data:image/png;base64,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">
            </div>
            <div class="title">
                <h2>Reception area</h2>
            </div>
            <div class="value">
                <h1>
                    {{ $waiting }}
                </h1>
            </div>
        </div>
        <div class="patients-done shadow grid-card">
            <div class="icon">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFGElEQVR4nO2dS4hcRRSGP9Mm6qhDiG9BY0ST6FYZN7PQhdG4VXzrUqIoQc1gNoruhklEs5A4PogxvnAjblQwcSGiYHQdEONuBoSYiZleJDHmSMlpaJp53J6uunXq9vnhh6Gnu+495++q6jp16lxwOBwOh8PhcDgcDoejIKwFxoDHgR3Aq8AuYFq5S1/boe8Z0884IqClDt0JfAP8CcgKGT77NfCSthnadlQUYSvwCfD3AAIsxxPAx8C9Ls7CuAHYDcwmFGExzupQt967DNwI7AFOZRBCengG+BDYPIzCXAMcAP41IIT0MNzTfuBqhgCrgKd0DBfjPAFsb/Icswn41YCjpU/+AmykYXigkF4hi3AeeIwGYA3wrgGHSiROq01F4mJdjEnDeAgYpTCsA3404DxJxMPAlRSCK4AjBpwmiXlEbTWNkYb3DFmgp1yKUazWIKAMGQ8BF2AQ7xlwjmTiOxjDQwacIpkZ9l9M4ObEoXIpaPGYPTDZKjQcIgnDLFljX9sNOEGM8dlcYoTw9JwBB4gxhuH72hyCHDBgvBhl2E+pPZRucXNJjPBs3SH7DwwYLcb5fl1iXA+cNmCwGOcZTd5Ijt0GjJVEwcJvI7cZslmS4vxMqTqSmD8Al+vm05cR251JvS65z4DzJDL39ewChr+/iNj+lpSCfGrAgRKJ54CXF7EzpigfpRKj1aCF4KkKwcCWppsOeq25VMPWmAFHSgQeA8Yr2vxmpGvenkKQnQacKQPyd13UVsFkxOtOpBCk9N3A74HLKtr6RuRrf5VCkEHOZ+Tm58BFGXpGh2GpEBVrEznqeA2/pF4DzsvUM7oZNZfrjgQ3+J0m000mClSeBp7sw8YUPSPZxP5Egu3ODV3t3wX8EbH9v4A7+7AvZc/oMGpu8IuRb+7pRXK6JiP0lqPALYZ6RofPR9Tj/5OtMYeqpcb0ceC3Fbb9U58pnnWJEfgKRiO8D1e43iXAWzopV233M+BCY8NUN4MPo2E64o21+xjfxyv2lj16Ostiz+jwbYwK0q8oI0vMLf8A2/q0JYcY0QV5PcEN9iPKQr3lpJ5pL0GM6JtVMSf1QUQZUaeGmNStBYkRfVKP/bO3d01SNfranWmP4Qk8+c/e2AvDGKKUJEb0hWGK0Mmgw1cJw1Sy0Emq4GJKUSYNiNDN0VLD7+0IolgTI3r4ve4NqvkB5hQrc0byDaq6t3DbK+gp1npG0i3cHEkO7T5EsSpG4G1NSgNqVxDFshjJ0oDQ0ns5jJpfYk6xOGd0M5yjSYatGQ1rL9BTLPeMDu9OKUgrc7J1u0uUEsRInmyNRi1zGjmvm1FSAKeoAdf5gR2qHtiprdLpPgPfPjHOUGqkNtykBxtzGy1GWfuhT7TGbW7DxSjDodjacVWDzotI5MIBoS5xFjxnwAFijM+QES0tuJLbCWKowlz2wsthgvfyTNgoz9TBgwa+nZKZ5gotx06mk4K4F4NY3dDCybIMD1otgjmMZWJ/1sRw0/BCygbhpcYNoqnF+A9arma9HNY07NfX3hXkFZvE/YU/0OUk8AgNw8ZCwyyHtVh0I7FKz44fM+BoWYZzTX8oWG/N3/1GN7nO6o5o2F4YOmww+GDJTbmdYgHrNZtlJoMQM5odEqqtOnrQAu7RsngpC9Mc14zCLcMyR8RAS08dTWg6/yAJerPaxoQmPrsIkTCqIoW9hxf0ZOtU1wPup/S18L9H9b3FPeLO4XA4HA6Hw+FwOBwML/4DoaCG/umxQZYAAAAASUVORK5CYII=">
            </div>
            <div class="title">
                <h2>Completed</h2>
            </div>
            <div class="value">
                <h1>
                    {{ $done }}
                </h1>
            </div>
        </div>
        <div class="patients-form shadow">
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
                    <select name="gender" id="">
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
        <div class="patients-waiting-list shadow">
            @foreach ($patients as $patient)
                @if ($patient->Status == 0)
                    <div class="waiting-patient">
                        @if ($patient->Gender === 'Female')
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB7UlEQVR4nO3ZPUgcQRjG8b8JCEICEREhYuwUEbS2DiKkjVqISTqLIHhYqmWIYFJZiDZp0gUCEewUi8QvToiFCAaxPcXzszgTi7sJA3NwbKO3u++7o+wDT3k3+yv23dlZSJMmjXY6gQ/AKpADroECsAd8Bl7geVqBH4C5pRb2ERgCmvEsPUD+DohgS8B3oAUP0gach0BU9ghoTxLxCNiMiCjX3kN1SUEGY0KUO5YU5GfMkMMkEE1AMWaIAbq1ISMCCAO814Z8FYLMa0N2hCCLmojH7gktAVnThDwXQhhgXxPSJQg51oS8FIScaEJeC0LympBhQcjpQ3gYGreTVsukIORKEzIrCCloQr4JQm7u8/a9skW3cxCPXeRSEGLcQYZ4eoURBhi4z7veyv7RgBwoQDY0IPZVdEsI8Bf4AjSifJ5ltyqfgCVgt8ohcAH8dqN8AngFPMGTvKkC0o+HqQEywL8qIPYNc9T91ov0AdkI98WWG+mJpBZ4F/MotvfLW/ff4mkAptyhs9Tozbk17Foih9XjbtJIPj9MYKpl3NqxpB5YUQSYQJeBZ1ERT4HtBBHGNeuuJXQWPEAY17mwiA73acx40lLYr1ozHly8CXQ6DERqYxil62EgUT9wSvQsDOSXBxduArVnBWnSpKH6/AeEaNzl2KSnTwAAAABJRU5ErkJggg==">
                        @elseif ($patient->Gender === 'Male')
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAACCElEQVR4nO2Zz0obURTGf2OLpi/QuBI3Lly22gdw0624skEUQaHpSlqDfQHFVWteQoX2Abop9RF04cptEkFREFMoYmvKhTMg004wOndyz3h+8EGYG5L7fffm/jkBwzAMwzAMwzAMwzAMw/BNBEwAc8B7kXv9UtoKyzBQB1pAJ0WubQsoUyAiYA342cV4Um2gVoQZUQJ2ezCe1I58hkoiYPsB5mN91ToT1jIwH2sVZTwHLjMMoC2LqBrqGZqP9RklDADHHgJoaVkLJj2Yj+UOS8Ez5zGACgqoeQxAxW6w6jGADyig4jGAWRQw4TGAFyggAhoezDe1bIPIlTbrAD7xyI/CZZRRyzAAVzV6tNfhL5p++0lKUtS4r/ltzQWRmEgOR+0ejF/KtFc78v+jLFfaZhfjDVnt3SJaWCI50FRulcUr8qxQI24Yxj+U5LL0BqgCH0VVeebahigQEfAK2AAOgOs7bIHuPfvAupTXVC6Mg8ACcJjBSfAIWAGeoYBIaoLd/gC9r5qh1wRHgT0PxpP6AYwQGFPASQ7mY50BrwmEt8DvHM3Hct+53G/zS8CfPpiPdQO865f5GelAp89yAzCdt/kx4CIA87evz+N5mX8iB5VOYHJ9eppHAPMBmE3TYh4BfAvAaJq+5xHAaQBG03SeRwC/AjCaJtc372wCVwGYTepKbp2GYXBn/gIcmHnJ2f8WNwAAAABJRU5ErkJggg==">
                        @endif
                        <h3>{{ $patient->First_Name . ' ' . $patient->Last_Name }}</h3>
                        @if ($patient)
                            <form action="{{ route('patients.changeStatus', ['patient' => $patient]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="1">
                                <button type="submit" class="done-button">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADZ0lEQVR4nO2aXYhOQRiAn7XsT1jyE9ZPoZSfFSnFhewSSnZtuXElUZISSaK02TuW9dPKLllSSm5ckHKBuPFTbrTYcoENrXZZitjs+jQ1X22nM3POd87MOd+3zVNvfX2dd2be98yZ9513BhwOh8PhcDgcjqQoA6qAtUAdsFn+XgSUMwwpBeqBVqATGAQyCvkHvAYuApukbsEyEzgNfNUYHCTfgCZgFgXEOOAs0B/DcK/8AU4CFeQ564HPBg33ShewjjykCGgM+L5NiejjMHlEMdCegOFD5ZhiLGOAU8AnoBtoAybbfvPtCRv/ShEdRgEPfJ7vsBleGxM2Xkz/FYqxHNHo7bBhfA0wkLADRFj1Yx7wW6MnQqlRKiyv9n7yTn7jXkYAjwN095p2wJmEjc9owt/uAL0fwESTxs8wnOSEEbHQ+lEJ9AXo7qLA3343MEExltsBuo9kpDJGCdCbsAO2KMayNUT6PB/D1Cds/C3FOCYBXwJ0D2GB1hwGfwdYBSwHrkQwvk9+435cC9B9AYy04YDOkIN/4jOA4zk6YKdiDBsC9ERussSG8eU5bHYO+uiLxehGSP37isVL5AHvQzjASiGlKoe3d0JTDgtKWn4BcxX650L2b3zxy6a+YR3wXVaE/BAh7Y1G94BCb2UOM7AaC9RF2LWNV7Q1W8Z3r85zub32C78dOfRdmw8OyAAP5eD9WAb8HPLsX2CpoV2nFQesieAAIdc12dhGabiuyFEVIfVenfYimPFIg6bdPZoih/gcnkbob6ENB5TFqPmJev82TdtTFP/vj9CXtTBIwOodJP3yMwrLHM8aEVbEbLLGhRgOyO7NF4fs617EPlpsOqAupgOEfNDk+Fm2x2hfHKlZowToMeCEl/IEyY+p8kgsSru9mrBrjGYDDhByV7FjuxmjTXF8Zp3psthgwglXPSv2vhhtiarwNBKi2ZADhLwFLgPPYrYjttuJMVYeP2XyRLoUJXOrVKdwMOIng/KGSSo05IEDxJFYahQBl1I0Xpz+pk5xSk5oU9QOUpsJRxO6IDGQ9rTXITY7Hy2v9lbKXaZDZJPBZCmb5Ig4P5oColJeV4lzlNYj09vEMjwblMga3Xl5CVKXOwzIZ1rkrk5cexl2lAILZJm9VkqN/K+gb4Y6HA6Hw+FwOCgg/gM+9eQkV6NFhQAAAABJRU5ErkJggg==">
                                </button>
                            </form>
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection
