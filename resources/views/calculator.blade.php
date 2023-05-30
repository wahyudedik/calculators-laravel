<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
    <h1>Kalkulator</h1>

    @if(isset($result))
        <h3>Hasil: {{ $result }}</h3>
    @endif

    <form action="{{ route('calculator.calculate') }}" method="post">
        @csrf
        <input type="text" name="number1" placeholder="Angka 1" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="number2" placeholder="Angka 2" required>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
