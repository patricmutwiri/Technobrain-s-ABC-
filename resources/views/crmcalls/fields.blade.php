<!-- Q0 Field -->
<div class="question form-group col-xs-12" id="q0">
    <div class="col-xs-12">
        {!! Form::label('q0', 'Is the phone reachable?') !!}
    </div>
    <label class="radio-inlinex col-xs-12">
        <div class="col-xs-12">{!! Form::radio('q0', 'No', false, ['class' => 'radio-false', 'id' => '']) !!}  No
            <div class="col-xs-12 not-reachable-desposition">
                {!! Form::label('not_reachable', 'Call Disposation') !!}
                {{
                    Form::select('not_reachable',[
                        '' => '-- Select --',
                        "Phone Switched Off" => "Phone Switched Off",
                        "No Answer" => "No Answer",
                        "Phone Busy" => "Phone Busy",
                        "Silent Call" => "Silent Call",
                        "Number out of service" => "Number out of service",
                        "Invalid" => "Invalid",
                        "Voice Mail" => "Voice Mail"
                    ])
                }}
            </div>
        </div>
        <div class="col-xs-12">{!! Form::radio('q0', 'Yes', false, ['class' => 'radio-sel', 'id' => '']) !!} Yes</div>
    </label>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q1 Field -->
<div class="question hidden form-group col-xs-12" id="q1">
    <div class="col-xs-12">
        {!! Form::label('q1', 'My Name is '.$name.' calling from ABC, could I speak to [Mr./Mrs/Ms./Dr./Prof] '.config('app.agent').'?') !!}
    </div>
    <label class="radio-inlinex col-xs-12">
        <div class="col-xs-12">{!! Form::radio('q1', 'No', false, ['class' => 'radio-false', 'id' => '']) !!}  No</div>
        <div class="col-xs-12">{!! Form::radio('q1', 'Yes', false, ['class' => 'radio-sel', 'id' => '']) !!} Yes</div>
    </label>
    <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q2 Field -->
<div class="question form-group col-xs-12 hidden" id="q2">
    <div class="col-xs-12">
        {!! Form::label('q2', 'Can I talk to '.config('app.agent').' at some other date and time?') !!}
    </div>
    <label class="radio-inlinex col-xs-12">
        <div class="col-xs-12">
            {!! Form::radio('q2', 'No', false, ['class' => 'radio-false', 'id' => '']) !!}  No
            <div class="col-xs-12 q2_notclientsnumber">
                <input type="radio" name="q2_notclientsnumber" value="Not Clients Number" /> Number doesn’t belong to the customer<br/>
                <input type="radio" name="q2_notclientsnumber" value="Not Interested" /> Not Interested
            </div>
        </div>
        <div class="col-xs-12">{!! Form::radio('q2', 'Yes', false, ['class' => 'radio-sel', 'id' => '']) !!} Yes</div>
    </label>    
    <div class="col-xs-12 hidden q2_datetime">Callback Date: <input type="datex" class="dates" name="q2_datetime"/></div>
    <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q3 Field -->
<div class="question form-group col-xs-12 hidden" id="q3">
    <div class="col-xs-12">
        {!! Form::label('q3', 'Its about ABC and the benefits your company can acquire from us working together. Which is offering a solution that will significantly reduce your IT infrastructure costs while ensuring reliability and enhanced security through the services we offer. Are you interested?') !!}
    </div>
    <label class="radio-inlinex col-xs-12">
        <div class="col-xs-12">
            {!! Form::radio('q3', 'No', false, ['class' => 'radio-false', 'id' => '']) !!}  No
            <div class="col-xs-12 q3_desposition hidden">
                <input type="radio" name="q3_desposition" value="Call Back" /> Call Back<br/>
                <input type="radio" name="q3_desposition" value="Not Interested" /> Not Interested
            </div>
        </div>
        <div class="col-xs-12">{!! Form::radio('q3', 'Yes', false, ['class' => 'radio-sel', 'id' => '']) !!} Yes</div>
    </label>
    <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q4 Field -->
<div class="question form-group col-xs-12 hidden" id="q4">
    <div class="col-xs-12">
        {!! Form::label('q4', 'Thank you '.config('app.agent').', Have you heard about ABC?') !!}
    </div>
    
    <label class="radio-inlinex col-xs-12">
        <div class="col-xs-12">{!! Form::radio('q4', 'No', false, ['class' => 'radio-false', 'id' => '']) !!}  No</div>
        <div class="col-xs-12">{!! Form::radio('q4', 'Yes', false, ['class' => 'radio-sel', 'id' => '']) !!} Yes</div>
    </label>

    <div class="col-xs-12 info"> 
        ABC is a backup service provider that offers you affordable & secure backup solutions. It also offers leased server services so customers don’t have to invest in physical servers in their offices which are managed by ABC, 24/ 7
    </div>
    <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>
<!-- Q5 Field -->
<div class="question form-group col-xs-12 hidden" id="q5">
    <div class="col-xs-12">
        {!! Form::label('q5', 'What\'s your take on these ABC Services?') !!}
    </div>
    <div class="col-xs-12"> 
    {{ Form::select('q5', [
           '' => ' -- Select --',
           'Excellent'  => 'Excellent',
           'Good'       => 'Good',
           'Bad'        => 'Bad',
           'Poor'       => 'Poor',
           ]
        ) }}
    </div>
    <div class="col-xs-12 hidden reachable-desposition">
        {!! Form::label('reachable_desposition', 'Disposation') !!}
        {{ Form::select('reachable_desposition', [
                ''  => ' -- Select -- ',
                "Call Back"           => "Call Back",
                "Complete Call"      => "Complete Call",
                "Not Interested"   => "Not Interested"
           ]
        ) }}
    </div>
    <div class="col-xs-12"> 
        {!! Form::text('q5_others', '', ['class' => 'form-control hidden']) !!}
    </div>
     <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
     <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q6 Field -->
<div class="question form-group col-xs-12 hidden" id="q6">
    <div class="col-xs-12">
        {!! Form::label('q6', 'So I believe securing your business information is extremely critical. How do you back up your business data? What systems do you currently use? Specify if others') !!}
    </div>
    <div class="col-xs-12">
    {{ Form::select('q6', [
            '' => '-- Select --',
            'Physical drives'   => 'Physical drives',
            'Good'              => 'Good',
            'Cloud'             => 'Cloud',
            'Others '           => 'Others'])
    }}
    </div>
    <div class="col-xs-12">
        {!! Form::text('q6_others', '', ['class' => 'form-control']) !!}
    </div>
    <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q7 Field -->
<div class="question form-group col-xs-12 hidden" id="q7">
    <div class="col-xs-12">
        {!! Form::label('q7', 'With that ' .config('app.agent'). ', you do agree that your business data is extremely important for your business & needs back up?') !!}
    </div>
    <div class="col-xs-12">
        {!! Form::radio('q7', 'Disagree') !!}  Disagree 
    </div>
    <div class="col-xs-12">
        {!! Form::radio('q7', 'Agree', false) !!} Agree 
    </div>
    <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q8 Field -->
<div class="question form-group col-xs-12 hidden" id="q8">
    <div class="col-xs-12">
        {!! Form::label('q8', 'Ok. And you do agree that ensuring that, it’s backed up automatically in a secure, off site location gives you a piece of mind that your business info is safe? ') !!}
    </div>
        <div class="col-xs-12">
            {!! Form::radio('q8', 'Disagree') !!}  Disagree
        </div>
        <div class="col-xs-12">
            {!! Form::radio('q8', 'Agree', false) !!} Agree
        </div>
        <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
        <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q9 Field -->
<div class="question form-group col-xs-12 hidden" id="q9">
    <div class="col-xs-12">
        {!! Form::label('q9', 'You also agree that that our service is very affordable, right?') !!}
    </div>
        <div class="col-xs-12">
            {!! Form::radio('q9', 'Disagree') !!}  Disagree
        </div>
        <div class="col-xs-12">
            {!! Form::radio('q9', 'Agree', false) !!} Agree
        </div>
        <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
        <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q10 Field -->
<div class="question form-group col-xs-12 hidden" id="q10">
    <div class="col-xs-12">
        {!! Form::label('q10', 'Fantastic. If you’d so kind as to giving us an appropriate time in the week one of our business executives will come over to discuss the solution in detail.') !!}
    </div>
    <label class="radio-inlinex col-xs-12">
        <div class="col-xs-12">{!! Form::radio('q10', 'No', false, ['class' => 'radio-false', 'id' => '']) !!} No</div>
        <div class="col-xs-12">{!! Form::radio('q10', 'Yes', false, ['class' => 'radio-sel', 'id' => '']) !!} Yes</div>
    </label>
    <div class="col-xs-12">
        {!! Form::label('q10_datetime', 'Date') !!}
        <input type="datex" name="q10_datetime" class="dates col-xs-4" />
    </div>
    <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q11 Email Field -->
<div class="question form-group col-xs-12 hidden" id="q11">
    <div class="col-xs-12">
        {!! Form::label('q11_email', 'Kindly assist us with your email address to sent an appointment invite whereby one of our representatives will visit you and take you through the process of registration / set up and get you ready for the services.') !!}
        {!! Form::text('q11_email', '', ['class' => 'form-control']) !!}
    </div>
    <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q12 Field -->
<div class="question form-group col-xs-12 hidden" id="q12">
    <div class="col-xs-12">
        {!! Form::label('q12', 'Is there any question you would like me to address with regards to our Services / or any clarification on the information I have given you?') !!}
    </div>
    <label class="radio-inlinex col-xs-12">
        <div class="col-xs-12">{!! Form::radio('q12', 'No', false, ['class' => 'radio-false', 'id' => '']) !!} No</div>
        <div class="col-xs-12">{!! Form::radio('q12', 'Yes', false, ['class' => 'radio-sel', 'id' => '']) !!} Yes</div>
    </label>
    {!! Form::text('q12_details', '', ['class' => 'form-control col-xs-12']) !!}
    <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<!-- Q13 Field -->
<div class="question form-group col-xs-12 hidden" id="q13">
    <div class="col-xs-12">
        {!! Form::label('q13', 'Is this call an escalation?') !!}
    </div>
    <label class="radio-inlinex col-xs-12">
        <div class="col-xs-12">{!! Form::radio('q13', 'No', false, ['class' => 'radio-false', 'id' => '']) !!} No</div>
        <div class="col-xs-12">{!! Form::radio('q13', 'Yes', false, ['class' => 'radio-sel', 'id' => '']) !!} Yes</div>
    </label>
    <div class="col-sm-12 hidden q13_phone_email">
        <div class="col-xs-12">
            {!! Form::label('q13_mail', 'Escalation Email address') !!}
            {!! Form::text('q13_mail', '', ['class' => 'form-control col-xs-12']) !!}
        </div>
        <div class="col-xs-12">
            {!! Form::label('q13_phone', 'Escalation Phone Number') !!}
            {!! Form::text('q13_phone', '', ['class' => 'form-control col-xs-12']) !!}
        </div> 
        {{-- message --}}
        {!! Form::hidden('smstext', 'Hello Test Escalation', ['class' => 'hidden col-xs-12']) !!}
        {!! Form::hidden('emailtext', 'Hi, there is an Escalation, Kindly look in to it asap', ['class' => 'hidden col-xs-12']) !!}
    </div>
    <button class="previous-question btn btn-flat"><i class="fa fa-rewind"></i>&nbsp;Back</button>
    <button class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Continue</button>
</div>

<div class="question form-group last col-xs-12 hidden" id="thank-you">
    Well {{ config('app.agent') }}, thank you for your time, it's been a pleasure talking to you. 
    If you have any further clarifications , feel free to contact our website www.abc.co or phone number 020 – 5230028. 
    
    Have a good day. Good bye. 
    <br/><br/>
    <!-- Submit Field -->
    <div class="form-groupx col-sm-12" id="submit">
        <button type="submit" class="continue btn btn-flat"><i class="fa fa-play"></i>&nbsp;Save</button>
        <input type="submit" name="save" value="Save" class="btn btn-primary col-xs-5 hidden">
        &nbsp;
        <a href="{!! route('crmcalls.create') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>
