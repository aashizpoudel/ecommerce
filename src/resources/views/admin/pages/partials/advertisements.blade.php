

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th></th>
            <th>SN</th>
            <th>Banner</th>
            <th>Advertiser</th>
            <th>Link</th>
            <th>Expires</th>

        </tr>
    </thead>
    <tbody>
    @foreach($advertisements as $advertisement)
        <tr>
            <td class="text-center">
                <form method="post" action="{{ route('admin.delete', $user->id) }}" class="delete_form_user">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button id="delete-user-btn">
                        <i class="material-icons red-text">delete_forever</i>
                    </button>
                </form>
            </td>
            <td>
                {{ $advertisement->id }}
            </td>
            <td>
                {{ $advertisement->banner }}
            </td>
            <td>
                {{ $advertisement->advertiser }}
            </td>
            <td>
                {{ $advertisement->link }}
            </td>
            <td>
                {{ prettyDate($advertisement->expires) }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>