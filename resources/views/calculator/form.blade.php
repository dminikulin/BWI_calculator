@extends("layouts.calculator")
@section("content")
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">Body weight index calculator</div>
            <div class="card-body">
                <form action="{{ route("result") }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" >Height (in cm):</label>
                        <input class="form-control" type="text" name="height" >
                    </div>
                    <div class="mb-3" >
                        <label class="form-label">Weight (in kg):</label>
                        <input class="form-control" type="text" name="weight">
                    </div>
                    <button type="submit" class="btn btn-success" >Calculate</button>
                </form>
            </div>
        </div>
    </div>
@endsection
