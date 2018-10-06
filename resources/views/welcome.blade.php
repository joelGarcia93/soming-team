<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      <div class="row no-margin">
        <div class="col-6 offset-lg-3 bottom-space3">
          <h1 class="text-center top-space3 blue-text">Calculadora</h1>
          <div class="col-lg-8 offset-lg-2 grey-color padding">
            <div class="col-lg-10 offset-lg-1 white-color padding">
              <span class="grey-text">COPY RESULT</span>
              <span class="grey-text float-right pointer" onclick="clearCalculator()">CLEAR</span>
              <div class="form-group">
                <input type="text" class="form-control" id="number_expression" readonly>
                <input type="text" class="form-control" id="operation_result" readonly>
              </div>
              <div class="row padding-calculator">
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('1')">1</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('2')">2</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('3')">3</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size  gold-color white-text">
                  <button type="button" name="button" class="no-border btn-signs" onclick="writeNumber('+')">+</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('4')">4</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('5')">5</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('6')">6</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size gold-color white-text">
                  <button type="button" name="button" class="no-border btn-signs" onclick="writeNumber('-')">-</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('7')">7</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('8')">8</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('9')">9</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size gold-color white-text">
                  <button type="button" name="button" class="no-border btn-signs" onclick="writeNumber('/')">/</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('.')">.</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size">
                  <button type="button" name="button" class="no-border" onclick="writeNumber('0')">0</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size gold-color white-text">
                  <button type="button" name="button" class="no-border btn-signs" onclick="equalsResult()">=</button>
                </div>
                <div class="col-3 border padding-buttons buttons-text-size gold-color white-text">
                  <button type="button" name="button" class="no-border btn-signs" onclick="writeNumber('*')">*</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
