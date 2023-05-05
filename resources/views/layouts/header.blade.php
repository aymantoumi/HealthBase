<header class="main-header header-grid">
    <div class="logo">
        <h3>
            HealthBase
        </h3>
    </div>
    <nav class="nav-main nav-grid ">
        <a href="{{ route('index') }}" class="@if ($page === 'home')
        active 
        @endif" ><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAz0lEQVR4nO3TPQrCQBCG4bdQ/KlFvIeVNxC0FawEGxuL1HoCryCWXsNCLbUVtIuFZxC7lYURwkA2mmwsNAMfS8LsPDAh8K81BE5yeq8SsABMJEug7AtoABsFvLIHWlmBNnCNAYzkBnTSAiPgngAYyQMIPhleAVZvDjcqa6CeBNRkz2kAE/lOVRcyzwgYycyFHD0hBxcSekLCAjHfWNdZftCBnJc8kED1BnkgU9VrnwuE3Ne1c1zsqd6+o3frQprAGJiodGP67Xvda+/bOT9YT/KxGvmANZ5WAAAAAElFTkSuQmCC">
            Home</a>
        <a href="{{ route('patients.index') }}" class="@if ($page === 'Patients')
        active 
        @endif"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAABaklEQVR4nL2UzytFURDHPyS6byt6FthYiaxIytaCP4AtO2VrQ+K9jez8A/4AC2UhQuz8yJ/gvUiKJIWIF7m6NYtrOvfOUYep6dY535nPmXNmLvhZASgDVaAm3xIQecZ7AU6A2OHHoUDlDEAsvhQCUjUglRCQmgF5/49KzkNASgZkMQQkki6KHX4Uso0j6aKKvFFFKggG+FNrATaAN4/uOgVGfgsoAhcyiM2p9ckc2Ccw4QuoA/aBM8del1HVM9DmA5mWgPmM/RsDtGIB2oEnEfdkaNYNyJXcRqZti/A+RzhjQBIfygKMp0RbOQfp84DMuQKbgOuUaCEHUg88GJBNV+CUEo3iZ41Av1Sejr90iQ+UqNtIPiu6mrR7pwJ9AA3pgOSBXxSk1YAMKv0eMKDWOjTkSwmKHtf0qoawoHIk1f2wOyUYxrZDVUmvdRvLSrDmAUn+a8mb7Mqpd9RAOstfBR49ZsDyW2Asnf0buh3lzqh9ziUAAAAASUVORK5CYII=">
            Patients</a>
        <a href="{{ route('payments') }}" class="@if ($page === 'Payments')
        active 
        @endif"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB/ElEQVR4nO2Vv2sUURDHl4CV+geIIkYLIXg7ExfR7Mxm7zt7F8TOoGXQ3iIg9iKoKNgbK9NFsBMMCsEijYRYSMDCwqQQorFIYiNofpzM5fSSC8ftXc7KPBjYt/Dm8973O29eEOyPdgYLiBVvWPGpW0FqL6MYp7ZD5kLNbp5VRKGUlMTWWK3SbpDiOw9k5zwPC+6S2FQdorbZl6aH/JvEbnQC4Hpc8TxhUu5lxVIURQfogh11SOV0HB9mya6R2o89QcRWSOwypekJEvsWlssHSW22CnFqSznE1lhsNB8QS38grNgI8ultv0hwJwhu97DaVRZ7lWNTNYhVckLwqGqoYozVnrDYQscQUkyy4KEXw06tccs9Y7XlJvL89JOyYrolpDBYKtTK+mODoZ9DLZ53ucKB9AyJLTZAprcqNSvlOIm9JcV4cwmw7p6Q4N7u/xjzO9exJyyYYcUDTx5J6TgJnv8L4ycpsetb1YVnudY0QkjwofUirDfK1CQ2Pd8uiE/6NbtIgtVc8mnT3X/hBPH2G1+DYMPbildHv2JkT5AYQ56noNlJVnytQwQzpHa/Wn4xLvnt7uwUWGWxsuchxWNWvKj2RIc4lQQTpPauSzHLgqdRkhxhLabu0d+WX0jTY946uhWhYJgF86T2fgeE1V539YUUm/IO0dZTHfz34ze9DafJBu0m1wAAAABJRU5ErkJggg==">
            Payments</a>
    </nav>
</header>
