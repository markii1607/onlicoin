
<div class="card-box">
    <h5 class="m-t-0 m-b-30 panel-name">Recent Activity</h5>
    <a href="{{route('clear_logs')}}" class="pull-right">Clear Logs</a>
    <table class="table table-bordered tbl">
        <thead>
            <tr>
                <th>Date</th>
                <th>Remarks</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody id="recent_activity_logs">
            @forelse($logs as $log)
                <tr>
                    <td>{{$log->created_at}}</td>
                    <td>{{$log->transact_desc}}</td>
                    <td>{{$log->transact_amount}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="99">
                        No Activity
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
