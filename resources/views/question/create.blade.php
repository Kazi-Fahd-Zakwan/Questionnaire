@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Question') }}</div>

                <div class="card-body">
                    <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control"
                                   value="{{ old('question.question') }}"
                                   id="question" aria-describedby="questionHelp" placeholder="Enter question">
                            <small id="questionHelp" class="form-text text-muted">Give a interesting Question.</small>

                            @error('question.question')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choicesHelp" class="form-text text-muted">Give Choices.</small>
                                <div>
                                    <div class="form-group">
                                        <label for="answer1">Choice 1</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer1"
                                               value="{{ old('answers.0.answer') }}"
                                               aria-describedby="choiceHelp" placeholder="Enter Choice 1">

                                        @error('answers.0.answer')
                                        <small class="text-danger"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer2">Choice 2</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer2"
                                               value="{{ old('answers.1.answer') }}"
                                               aria-describedby="choiceHelp" placeholder="Enter Choice 2">

                                        @error('answers.1.answer')
                                        <small class="text-danger"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer3">Choice 3</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer3"
                                               value="{{ old('answers.2.answer') }}"
                                               aria-describedby="choiceHelp" placeholder="Enter Choice 3">

                                        @error('answers.2.answer')
                                        <small class="text-danger"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer4">Choice 4</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer4"
                                               value="{{ old('answers.3.answer') }}"
                                               aria-describedby="choiceHelp" placeholder="Enter Choice 4">

                                        @error('answers.3.answer')
                                        <small class="text-danger"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Question</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
