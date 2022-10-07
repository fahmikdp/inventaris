@extends('layouts.main')

    @section('container')
    <div class="text-center">
        <h1>Hitung Volume Tabung!</h1>
        <form method="POST" action="process">
            <div>
                <label for="jari2" class="form-label">Jari-jari :</label>
                <input type="number" name="jarijari" id="jari2" placeholder="Jari-jari">
            </div>
            <label for="">Tinggi :</label>
            <input type="number" name="tinggipermukaan" placeholder="Tinggi">
            <br>
            <br>
            <input type="submit" value="SUBMIT" class="btn btn-primary">
        </form>
        <br>
        <h4>Volume air pada tabung adalah
         @yield('hasil')
         liter/cm<sup>3</sup></h4>
    </div>

    @endsection
