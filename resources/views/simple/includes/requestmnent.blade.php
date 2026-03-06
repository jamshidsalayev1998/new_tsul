<!-- Start Requestment section -->
<style>
    .requestmentName {
        background: #fff;
        border-radius: 8px;
        margin-bottom: 12px;
    }

    .requestmentName h1 {
        font-size: 36px;
        color: #2C42A7 !important;
    }

    .ark {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        background-color: #2C42A7;
        height: 10px;
        width: 100%;
    }

    .requestmentAnswers {
        background: #fff;
        border-radius: 8px;
        margin-bottom: 12px;
    }

    .requestmentAnswers h3 {
        font-size: 16px;
        color: #202124 !important;
    }

    .requestmentAnswers h3::after {
        color: red;
        content: " * ";
        font-size: 16px;
    }

    .form-check {
        line-height: 1.9;
    }

    .submitAgrees {
        background: #fff;
        border-radius: 8px;
        margin-bottom: 12px;
    }

    .submitAgrees h3 {
        font-size: 16px;
        color: #202124 !important;
    }

    .submitAgrees h3::after {
        color: red;
        content: " * ";
        font-size: 16px;
    }
</style>

<section class="seventh-part w-100 my-5  bg-white rounded-3">

    <form id="requestmentFrom" class="row">
        <div class="container requestment">
            <div class="requestmentName">
                <div class="p-4">
                    <h1>{{ $requestment->$name_locale }}:</h1>
                    <p>{!! $requestment->$description_locale !!}</p>
                </div>
            </div>


            <div class="requestmentAnswers">
                <div class="p-4">
                    <h3>Answer name ?</h3>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                               id="flexRadioDefault1">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            answers key 1
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                               id="flexRadioDefault1">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            answers key 2
                        </label>
                    </div>
                </div>
            </div>

            <div class="requestmentAnswers">
                <div class="p-4">
                    <h3>Answer name ?</h3>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                               id="flexRadioDefault1">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            answers key 1
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                               id="flexRadioDefault1">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            answers key 2
                        </label>
                    </div>
                </div>
            </div>

            <div class="submitAgrees p-4">
                <h3> I understand all answers and I personally select all</h3>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="accept" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"> yes</label>
                </div>
            </div>

            <div class="d-flex">
{{--                <button class="btn border-0 text-capitalize w-25" onclick="clearFunction()">Clear</button>--}}
                <button type="submit"  class="w-25 btn btn-primary text-capitalize mx-md-4 mx-sm-1">Submit</button>
            </div>

        </div>
    </form>

{{--    <script>--}}
{{--        function clearFunction() {--}}
{{--            document.getElementById("requestmentFrom").reset();--}}
{{--        }--}}
{{--    </script>--}}
</section>
<!--End Requestment section -->
