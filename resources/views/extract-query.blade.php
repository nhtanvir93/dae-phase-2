<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Query Extraction</title>

        <style>
            .card-header span {
                font-size: 24px;
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <span>Extract Query Report <i>(Using Debugbar JSON)</i></span>
                </div>
                <div class="card-body">
                    @if(count($queries) > 0)

                        @php
                            $count = 0;
                        @endphp

                        <div class="px-3 py-3 mb-3">
                            <h5>Response Time = Booting Time + Application Time + Query Time</h5><br/>
                            <h5>Response Time = {{ $responseTime }}</h5>
                            <h5>Booting Time = {{ $bootingTime }}</h5>
                            <h5>Application Time = {{ $applicationTime }}</h5>
                            <h5>Query Time = {{ $duration }} ({{ count($queries) }} Queries)</h5><br/>

                            @for($i = count($queries) - 1; $i >= 0; $i--)

                            @php
                                $count++;
                            @endphp

                            <p>
                                <b>Query {{ $count }} :</b> {!! $queries[$i]['sql'] !!} <br/>
                                <b>Duration :</b> <i> {{ $queries[$i]['duration'] }} </i>
                            </p>
                            @endfor
                        </div>
                    @endif

                    <form method="post" action="/query-extraction">
                        @csrf
                        <div class="form-group row">
                            <label for="debugbar-json" class="col-sm-2 col-form-label">JSON</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="debugbar-json" rows="12" name="debugbar_json"></textarea>
                            </div>
                        </div>
                        <div class="float-right">

                            <button type="submit" class="btn btn-primary">Extract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>