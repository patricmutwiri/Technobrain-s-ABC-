<div class="col-xs-12">
    <button id="export" class="pull-right"><i class="fa fa-download"></i>&nbsp;Export</button>
</div>
<table class="table table-striped table-responsive" id="crmcalls-table">
    <thead>
        <tr>
            <th>Initiated Call</th>
            <th>Disposation</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q2 Response(No)</th>
            <th>Q2 DateTime(Yes)</th>
            <th>Q3</th>
            <th>Q3 Desposation</th>
            <th>Q4</th>
            <th>Q5</th>
            <th>Q5 Disposation</th>
            <th>Q5 (others)</th>
            <th>Q6</th>
            <th>Q6 (others)</th>
            <th>Q7</th>
            <th>Q8</th>
            <th>Q9</th>
            <th>Q10</th>
            <th>Q10 (Date)</th>
            <th>Q11 Email</th>
            <th>Q12</th>
            <th>Q12 (Details)</th>
            <th>Q13</th>
            <th>Q13 (Escalation email & phone)</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($crmcalls as $crmcalls)
        <tr>
            <td>{!! $crmcalls->q0 !!}</td>
            <td>{!! $crmcalls->not_reachable !!}</td>
            <td>{!! $crmcalls->q1 !!}</td>
            <td>{!! $crmcalls->q2 !!}</td>
            <td>{!! $crmcalls->q2_notclientsnumber !!}</td>
            <td>{!! $crmcalls->q2_datetime !!}</td>
            <td>{!! $crmcalls->q3 !!}</td>
            <td>{!! $crmcalls->q3_desposition !!}</td>
            <td>{!! $crmcalls->q4 !!}</td>
            <td>{!! $crmcalls->q5 !!}</td>
            <td>{!! $crmcalls->reachable_desposition !!}</td>
            <td>{!! $crmcalls->q5_others !!}</td>
            <td>{!! $crmcalls->q6 !!}</td>
            <td>{!! $crmcalls->q6_others !!}</td>
            <td>{!! $crmcalls->q7 !!}</td>
            <td>{!! $crmcalls->q8 !!}</td>
            <td>{!! $crmcalls->q9 !!}</td>
            <td>{!! $crmcalls->q10 !!}</td>
            <td>{!! $crmcalls->q10_datetime !!}</td>
            <td>{!! $crmcalls->q11_email !!}</td>
            <td>{!! $crmcalls->q12 !!}</td>
            <td>{!! $crmcalls->q12_details !!}</td>
            <td>{!! $crmcalls->q13 !!}</td>
            <td>{!! $crmcalls->q13_mail.'<br/>'.$crmcalls->q13_phone !!}</td>
            <td>
                {!! Form::open(['route' => ['crmcalls.destroy', $crmcalls->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('crmcalls.show', [$crmcalls->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('crmcalls.edit', [$crmcalls->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>