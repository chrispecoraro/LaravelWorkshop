<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
        <title>Health Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <div id="health-test" style="" class="">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Health Test</div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="/">
                            {{csrf_field()}}
                            <div class="form-group required">
                                <label for="1" class="control-label col-md-4  requiredField">How old are you?<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8" style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="1" value="1" style="margin-bottom: 10px">Less than 40 years</label>
                                    <label class="radio-inline"> <input type="radio" name="1" value="2" style="margin-bottom: 10px">40—49 years</label>
                                    <label class="radio-inline"> <input type="radio" name="1" value="3" style="margin-bottom: 10px">50—59 years</label>
                                    <label class="radio-inline"> <input type="radio" name="1" value="4" style="margin-bottom: 10px">60 years or older</label>
                                </div>
                                <label for="2" class="control-label col-md-4  requiredField">Are you a man or a woman?<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8" style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="2" value="5" style="margin-bottom: 10px">Man</label>
                                    <label class="radio-inline"> <input type="radio" name="2" value="6" style="margin-bottom: 10px">Woman</label>
                                </div>
                                <label for="3" class="control-label col-md-4  requiredField">If you are a woman, have you ever been diagnosed with gestational diabetes?<span
                                            class="asteriskField">*</span> </label>
                                <div class="controls col-md-8" style="margin-bottom: 35px">
                                    <label class="radio-inline"> <input type="radio" name="3" value="7" style="margin-bottom: 10px">Yes</label>
                                    <label class="radio-inline"> <input type="radio" name="3" value="8" style="margin-bottom: 10px">No</label>
                                </div>
                                <label for="4" class="control-label col-md-4  requiredField">Do you have a mother, father, sister, or brother with diabetes?<span
                                            class="asteriskField">*</span> </label>
                                <div class="controls col-md-8" style="margin-bottom: 35px">
                                    <label class="radio-inline"> <input type="radio" name="4" value="9" style="margin-bottom: 10px">Yes</label>
                                    <label class="radio-inline"> <input type="radio" name="4" value="10" style="margin-bottom: 10px">No</label>
                                </div>
                                <label for="5" class="control-label col-md-4  requiredField">Have you ever been diagnosed with high blood pressure?<span
                                            class="asteriskField">*</span> </label>
                                <div class="controls col-md-8" style="margin-bottom: 35px">
                                    <label class="radio-inline"> <input type="radio" name="5" value="11" style="margin-bottom: 10px">Yes</label>
                                    <label class="radio-inline"> <input type="radio" name="5" value="12" style="margin-bottom: 10px">No</label>
                                </div>
                                <label for="6" class="control-label col-md-4  requiredField">Are you physically active?<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8" style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="6" value="13" style="margin-bottom: 10px">Yes</label>
                                    <label class="radio-inline"> <input type="radio" name="6" value="14" style="margin-bottom: 10px">No</label>
                                </div>
                                <label for="1" class="control-label col-md-4  requiredField">What is your email address?<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-4" style="margin-bottom: 10px">
                                    <input class="input-md textinput textInput form-control" id="email" name="email" placeholder="youremail@gmail.com" style="margin-bottom: 35px" type="text">
                                </div>
                            <div class="form-group">
                                <div class="controls col-md-8 ">
                                    <input type="submit" name="Submit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
