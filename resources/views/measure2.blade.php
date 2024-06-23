@extends('layout.main-calculator')

@section('container')

<div class="judul mb-5">
    <h1>Body Mass Index Calculator</h1>
    <p>Cek keidealan tubuh anda</p>
</div>
    <div class="container">
      <h1>BMI Calculator</h1>

      <form class="calculator">
        <div>
          <label for="weight">Weight (kg)</label>
          <input type="number" id="weight" min="0" step="0.01" value="0" />
        </div>

        <div>
          <label for="height">Height (cm)</label>
          <input type="number" id="height" min="0" step="0.01" value="0" />
        </div>

        <div>
          <button type="reset">Reset</button>
          <button type="submit">Submit</button>
        </div>
      </form>

      <section class="output">
        <h3>Your BMI is</h3>
        <p id="bmi">0</p>
        <p id="desc">N/A</p>
      </section>

      <section class="bmi-scale">
        <div style="--color: var(--underweight)">
          <h4>Underweight</h4>
          <p>&lt; 18.5</p>
        </div>

        <div style="--color: var(--normal)">
          <h4>Normal</h4>
          <p>18.5 – 25</p>
        </div>

        <div style="--color: var(--overweight)">
          <h4>Overweight</h4>
          <p>25 – 30</p>
        </div>

        <div style="--color: var(--obese)">
          <h4>Obese</h4>
          <p>≥ 30</p>
        </div>
      </section>
      <a href="/home" class="text-decoration-none" style="font-size: 18px; color: salmon; text-align: center">Back to Home</a>
    </div>


@endsection
