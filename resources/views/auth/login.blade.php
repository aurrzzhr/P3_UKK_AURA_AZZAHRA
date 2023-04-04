<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="icon" href="/img/aura/ki.png">

    {{-- css --}}
    <link rel="stylesheet" href="/css/aura/l.css">

    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="side">
            <img src="/img/aura/rcelle.png" id="satu" alt="">
        </div>
        <form action="{{ route('login') }}" class="form" method="POST">
            @csrf
            <h2>LOGIN</h2>
            <input type="text" name="email" class="box" placeholder="Enter Email" required>
            <input type="password" name="password" class="form__input form__input--pass" placeholder="Enter Password" required>
            <i class="form__icon form__icon--hide fa-solid fa-eye-slash"></i>
            <button type="submit" id="submit">LOGIN</button>
        </form>
    </div>

    {{-- untuk icon --}}
    <script>
        const hideIcon = document.querySelector('.form__icon--hide');
        const passField = document.querySelector('.form__input--pass');

        hideIcon.addEventListener('click', () => {
            hideIcon.classList.toggle('fa-eye-slash');
            hideIcon.classList.toggle('fa-eye');

            if (hideIcon.classList.contains('fa-eye')) {
                passField.type = 'text';
            } else {
                passField.type = 'password';
            }
        })
        </script>
</body>
</html>
