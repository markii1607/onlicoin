
<div class="card-box">
    <h5 class="m-t-0 m-b-30 panel-name">Account Balance</h5>
    <a href="{{route('clear_balance')}}" class="pull-right">Clear Balances</a>
    <div class="row">
        <table class="table table-bordered" id="account_balance_table">
            <thead>
                <tr>
                    <th></th>
                    <th>PHP</th>
                    <th>OCT</th>
                </tr>
            </thead>
            <tr>
                <td>
                   Current Account
                </td>
                <td>
                   {{number_format($account_balance['current_fund'],2)}}
                </td>
                <td>
                   {{number_format($account_balance['current_fund']*$CUR_CONVERSION['OCT']/$CUR_CONVERSION['USD'],4)}}
                </td>
            </tr>
            {{--<tr>--}}
                {{--<td>--}}
                    {{--Subscription Amount--}}
                {{--</td>--}}
                {{--<td>--}}
                   {{--{{number_format($account_balance['subscription_fund'],2)}}--}}
                {{--</td>--}}
                {{--<td>--}}
                   {{--{{number_format($account_balance['subscription_fund']*$CUR_CONVERSION['OCT']/$CUR_CONVERSION['USD'],4)}}--}}
                {{--</td>--}}
            {{--</tr>--}}
            <tr>
                <td>
                   Manage Fund
                </td>
                <td>
                   {{number_format($account_balance['manage_fund'],2)}}
                </td>
                <td>
                   {{number_format($account_balance['manage_fund']*$CUR_CONVERSION['OCT']/$CUR_CONVERSION['USD'],4)}}
                </td>
            </tr>
            <tr>
                <td>
                   TOTAL
                </td>
                <td>
                   {{number_format($account_balance['total'],2)}}
                </td>
                <td>
                   {{number_format($account_balance['total']*$CUR_CONVERSION['OCT']/$CUR_CONVERSION['USD'],4)}}
                </td>
            </tr>
        </table>
    </div>
</div>