@extends('layouts.main')

@section('Content')
    <section class="home-grid home-color">
        <div class="total-patients shadow grid-card">
            <div class="icon">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADVklEQVR4nO2cX2iVZRzHP2tzi0wsQaGLzBqoaKgXilJQUN1009UKCqIQTBBUFLppV3oj3QYisi4kKqIIrV0IxlJcEEq0q0WRQ2mi7mIVu8hK2E8e9juszja2s3Pe9/2d9/1+4AuHczjnvO/z4Xnf9/kLQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEII0Rq6gEc96bXIkQ7gWeA4MATcBqwut/yzY8Az/h3RYh4GjgJj8whYLOk7R4CVstI8HcBbwMQyRNTnDvCmaszyWQ180QIR9fkaWKPa0hgbgF8ykPHfy1ivpCyNJ4CbGcqoZRxYLymLX6Z+zkFGLT8BqyRlYT7PUUYtn0rI/PQVIKOWVyTl/3QDNwoUkm7yKyRllr0FyjBPau8I52oAId/LxgwbA8gwz1OSAgcCiDDPfgmBjwOIMM9HEgI/BBBhnisSMv+YhhWU1GVTeaYCiDBPOpbK82cAEeb5vfI2gN8CiDBP6i2oPJcDiDDPxcrbAE4FEGGekxICrwcQYZ7XJATWAv8GkPGPxtpn+SqAkLOqHbO8GEDIcxIS52lrSDLmsg24V4CMdP/aKiHz814BQt6VjIV5APgyRxlplosmYy/Cg8A3Oci4APSodiyNHuCzjOdipZkuogE6gMPA3RaK+As4KAvN0esNx+kmREx7w0+TGFrIDuBDaGj85A9gANjeygMRc+8vzwP9wCfAMDDiGfb3+r3lrfuEEEIIIYRoMx7xx91D3h5JjcVL/rh73TPi753z9sdBf/xNaxdFk3T5SOIHwLUWdJv86r/1gvZEaYxdwBlgMsPOxUn/j52qNguPg7wEDObQ7V6f74BXgU7JmSFdlkYLEGF1GfVjqSyP+QKZZnpxLYMMVnGHh3d86r8FzRSwj4oMzw4EKHBbYlINfoiS8rgvGbM2y4/Ak5SMzb71nrVpJoCnKQntLsPKJKUsMqwMUtbltBGZ5ZxxP7e2otMnollJ82279Ye9H6DQLOOcoE14OWDr2zLItJ9raLoz3k3UgmXMG7theSNAIVnOeZvAnA9QQJZz0ghl2DGNyB2GllH+jrqsoTdA4VhB2UJAdgcoGCsoewjIpgAFYwUl7RsZktMBCsdyTjrn8Mub+3ziQJnT5+cqhBBCEIH7XoeCBH5/4coAAAAASUVORK5CYII=">
            </div>
            <div class="title">
                <h2>Total Patients</h2>
            </div>
            <div class="value">
                <h1>25</h1>
            </div>
        </div>
        <div class="patients-waiting shadow grid-card">
            <div class="icon">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAHjElEQVR4nO2de6gXRRTHv3bTe3uq3cwyApX8p7RA6IFIWeYjM7sJSVqWPShLUytTEcLsaamlgenFiLKHPcgHSmVSVJqYvSQrpTDS0h63rNSb77txYi7sb9jfzs7u2ZnZ350PHLh/7O6dme9vd2bOnDkD8FMF4GoAiwBsAbBXGP39AoA6AEehGBwH4FoACwF8CqABwCEABwD8CmAtgDkABgFoDQe5BMAmAIHCvgLQB+5yEoBZAPYkqEuz/QbgPgA1cIS7xK8naQXo2rFwi1YA7gXwl0Y9ZNsGYJjtiozMUIGb4c7n6c0M9ZBtrvh8G+dMAPszFHwfgK6w/4n6klGMZltho295laHgi2GP1gDe1yjr7wAeBrASwE8Jrq83WZlazX6jnB0Sv1IbzEvxqw8zPME9Y0xV5nrG13sEzHMhgCbNck6XnjEtwT007D/NRIUeZBTkAZhH51PVbIOlZyxPeN8CExWazyjIfJilX8pyni49Z7vGZ7lz3pV6jFGQR2GWxSnK+Iv0jJM1778/70qNZhTkNpijKuXkj0ZWWd6y9XlXrAujIJ1hjnNSllHu0Cdr3n8YwDF5V24tgxhrYJZhKcs5hGEO1iPvyl3EIEhvmGUMU4c+SHiBdZ7R10QFZ2cQYybMc0/KsnYs87zLALyX8BlXmOokX05RwZcsOeBGpxSE6lgd89zzASwFcCTmGX1Muq4nAWhMOHOdKO6xwZUZ3eskaJuY598Zcz85Y43SCcATAL6PKMx3AGaYciPE0DWDIGFhbo8QpipmkW6vLZd8eOJEo4ru4m+X2M4gSpQwt8Zc+47lOjvNHCZBwsLQp2qnI5PfwnG2ovPlNvIMtOOuhNXvXw48b1AQGvCwMV68kvTgH0VAQ5oREt1zrpgp0+s9SqxJ2AqhOUMsIectxjbOaJTJCf06cZwI4JGQqLL9A+AZw/6sZm7JWYwDwpvBwgkx84p9CZddB4qgsiSFbwQwAeZ5KkdBWDvyAYp/Rku4cVyXcs19HsxCfeOzzELQgGEKd0F7Kf4pfWbK0TNjeNBEmGeCcJFnFWM3gKvyKOCxAA7G/OONMZ33xoyV2ifWW0xzAYCPUpaZAibeyNs9siGmAIdFhy1TV9B19jD0C/8wYVTKQRHsQCNG6zNaWsbkWK8OygSl2Z77kG/uBrHEsFy42VeLN4H8ckMBtHdpdS0qfCfpqCqJnWeyskWgk6LBVknXt04RfGZshlsplJvQNU/qwp+VtoxiBADetlhvZ3lF0WjkDgmzm1GQPa7uTrLJWEWj3SFdr7vwr7JelurtLD0VDfaidP1MZkGmWqq3s1Qp9tttla6/nFmQ1Zbq7TSqMJfwOvnxihm+rv2riPZokai2HtAEiTuiMQgZmwu7UlB9hmgbcZjpzIJMs1RvZ2mnWINeJ11/MbMgH1iqt9NsUqyMhSO724g4JC5BDgjvsydEvWbQ9LvMb8mlXo1SbtT0O01hFuQhL0gp3RQNtiwi+JhTkI+9IHqu9QYpPIgmlLsYBTkkAi88IZYpGq2b5vW6NsCrUcokRYNRPxNmHLMgM7wgpfTWzO3RnVmQT7wgpVQrwntorhKmldjfzSXI4TyClovOupgGa4qIaFQtcGVNb9HimaVoMPJ7hYnbxJLGZrd4BSSGKhqMPMPcW8iCkH3hBSmlo6LBaO1E5gdGQY6IXF2eEFtjGoycikdLrcUdzFzn1ShlkaLBaB0+zAhmQeZ6QfQ238spYE9lDqDbAeD1jLZIpIXqW6Dkzqkz6tBQV+Zr5rckYLTNpvKQ5EWViFosV0HaiyjztAMNHygGC/TmF5ZVmtlzBjvQ6EECT0Bh3xRVRk5KoRqmRvFWBY7YN0XtU1Qp7l4r4GcrKHLYUTvFnrw9ESntTgHwtwMNHiiMEugUkvWKilGyMJkhzEPgIAejXPAVuWDVUGYf4jjDuUYCTWuKySDn/A4r1VZicptEcQ2APx1o/CDlPnxnSbLecVOZezuKNNyNDgggGx3RVEi6J3hL9iscgrVit+tzYp/4ZuHA5DYdQXZaTEOYmQUJw3hsn6iz2bU8u3lRq7F2To69DpbK+aSmIFGjxMIwUGPk9IfY425amH6aghQ+T+LUFLujloiEZj0MRJRUa0blN7p0FF4aWiXsT1QDgF0Z7VsRVEfb62RWaJaHMlej6KJwHvYSZLDPI9w3cYmOo+xxVAiTHZmNj894zEZFRbnQcaw/WxZkacbhb5NwilYMbYXbneOIvSCF0TA76/DXxilyudNN5MrNkvovSGHkAZDpr/kMKnfF0kFMuNYw5TgMYmxJmdW/Gs3h744iu1F0P2cDxH7EepG1bbVIYPNZStsg+o1RiqVY3eEv+ew8OaI7/L07z8J4oD38fcs3Wv5s0XSj+CQ4jqUZ98kLckZ3+EvHzXpypFqRnC3KN+bJGZ3h75FKc6NUwvB3uO0CVzpdNAWhQAyPQ8Nf8l57HBv+npV3gVo6/TMuenmY0fX+0kHFHoeGvyvzLowH/+ewTyqI35ZtgPYJNxPRGrs/aMbgiUKqtX//dlg4ECzq1OeDIjNqITeEVsKoa6Q4eoPOa6QzDuns3Fz5D+R81I/kYTH6AAAAAElFTkSuQmCC">
            </div>
            <div class="title">
                <h2>Reception area</h2>
            </div>
            <div class="value">
                <h1>15</h1>
            </div>
        </div>
        <div class="patients-done shadow grid-card">
            <div class="icon">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFGElEQVR4nO2dS4hcRRSGP9Mm6qhDiG9BY0ST6FYZN7PQhdG4VXzrUqIoQc1gNoruhklEs5A4PogxvnAjblQwcSGiYHQdEONuBoSYiZleJDHmSMlpaJp53J6uunXq9vnhh6Gnu+495++q6jp16lxwOBwOh8PhcDgcDoejIKwFxoDHgR3Aq8AuYFq5S1/boe8Z0884IqClDt0JfAP8CcgKGT77NfCSthnadlQUYSvwCfD3AAIsxxPAx8C9Ls7CuAHYDcwmFGExzupQt967DNwI7AFOZRBCengG+BDYPIzCXAMcAP41IIT0MNzTfuBqhgCrgKd0DBfjPAFsb/Icswn41YCjpU/+AmykYXigkF4hi3AeeIwGYA3wrgGHSiROq01F4mJdjEnDeAgYpTCsA3404DxJxMPAlRSCK4AjBpwmiXlEbTWNkYb3DFmgp1yKUazWIKAMGQ8BF2AQ7xlwjmTiOxjDQwacIpkZ9l9M4ObEoXIpaPGYPTDZKjQcIgnDLFljX9sNOEGM8dlcYoTw9JwBB4gxhuH72hyCHDBgvBhl2E+pPZRucXNJjPBs3SH7DwwYLcb5fl1iXA+cNmCwGOcZTd5Ijt0GjJVEwcJvI7cZslmS4vxMqTqSmD8Al+vm05cR251JvS65z4DzJDL39ewChr+/iNj+lpSCfGrAgRKJ54CXF7EzpigfpRKj1aCF4KkKwcCWppsOeq25VMPWmAFHSgQeA8Yr2vxmpGvenkKQnQacKQPyd13UVsFkxOtOpBCk9N3A74HLKtr6RuRrf5VCkEHOZ+Tm58BFGXpGh2GpEBVrEznqeA2/pF4DzsvUM7oZNZfrjgQ3+J0m000mClSeBp7sw8YUPSPZxP5Egu3ODV3t3wX8EbH9v4A7+7AvZc/oMGpu8IuRb+7pRXK6JiP0lqPALYZ6RofPR9Tj/5OtMYeqpcb0ceC3Fbb9U58pnnWJEfgKRiO8D1e43iXAWzopV233M+BCY8NUN4MPo2E64o21+xjfxyv2lj16Ostiz+jwbYwK0q8oI0vMLf8A2/q0JYcY0QV5PcEN9iPKQr3lpJ5pL0GM6JtVMSf1QUQZUaeGmNStBYkRfVKP/bO3d01SNfranWmP4Qk8+c/e2AvDGKKUJEb0hWGK0Mmgw1cJw1Sy0Emq4GJKUSYNiNDN0VLD7+0IolgTI3r4ve4NqvkB5hQrc0byDaq6t3DbK+gp1npG0i3cHEkO7T5EsSpG4G1NSgNqVxDFshjJ0oDQ0ns5jJpfYk6xOGd0M5yjSYatGQ1rL9BTLPeMDu9OKUgrc7J1u0uUEsRInmyNRi1zGjmvm1FSAKeoAdf5gR2qHtiprdLpPgPfPjHOUGqkNtykBxtzGy1GWfuhT7TGbW7DxSjDodjacVWDzotI5MIBoS5xFjxnwAFijM+QES0tuJLbCWKowlz2wsthgvfyTNgoz9TBgwa+nZKZ5gotx06mk4K4F4NY3dDCybIMD1otgjmMZWJ/1sRw0/BCygbhpcYNoqnF+A9arma9HNY07NfX3hXkFZvE/YU/0OUk8AgNw8ZCwyyHtVh0I7FKz44fM+BoWYZzTX8oWG/N3/1GN7nO6o5o2F4YOmww+GDJTbmdYgHrNZtlJoMQM5odEqqtOnrQAu7RsngpC9Mc14zCLcMyR8RAS08dTWg6/yAJerPaxoQmPrsIkTCqIoW9hxf0ZOtU1wPup/S18L9H9b3FPeLO4XA4HA6Hw+FwOBwML/4DoaCG/umxQZYAAAAASUVORK5CYII=">
            </div>
            <div class="title">
                <h2>Completed</h2>
            </div>
            <div class="value">
                <h1>10</h1>
            </div>
        </div>
        <div class="patients-form shadow">
            <form action="" method="get">
                <div>
                    <input type="text" name="" id="" placeholder="First Name">
                    <input type="text" name="" id="" placeholder="Last Name">
                </div>
                <div>
                    <input type="text" name="" id="" placeholder="CIN">
                    <select name="reason" id="" aria-placeholder="Reason">
                        <option value="" disabled selected>Select Reason</option>
                        <option value="Vists">Visit</option>
                        <option value="Control">Control</option>
                        <option value="Reservation">Reservation</option>
                        <option value="Medical  certification">Medical certification</option>
                    </select>
                </div>
                <div>
                    <input type="date" name="" id="">
                    <select name="" id="" aria-placeholder="Gender">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div>
                    <input type="text" name="" id="" placeholder="Phone Number">
                    <input type="text" name="" id="" placeholder="Price">
                </div>
                <div>
                    <button class="button green">Submit</button>
                    <button class="button red">Camsel</button>
                </div>
            </form>
        </div>
        <div class="patients-waiting-list shadow">
            @for ($i = 0; $i < 100; $i++)
                <div class="waiting-patient">Hello MOM</div>
            @endfor

        </div>
    </section>
@endsection
