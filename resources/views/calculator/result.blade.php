@extends("layouts.calculator")
@section("content")
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h1>Result: {{ $result }}</h1>
                <hr>
                <ul>
                    <li>Less than 18.5 - underweight</li>
                    <li>18.5 - 24.9 - normal weight</li>
                    <li>25.0 - 29.9 - overweight</li>
                    <li>More than 30 - obesity</li>
                </ul>
                <a class="btn btn-info" href="{{ route("form") }}">Back</a>
            </div>
        </div>
    </div>
@endsection
