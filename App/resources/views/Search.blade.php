@foreach ($models as $model)
    <tr>
        <td>{{ $model->Model_Name }}</td>
        <td>{{ $model->Model_Year }}</td>

        <td class="d-flex">
            <a href="" class="btn btn-sm btn-default mx-2">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <a href="" class="btn btn-sm btn-danger mx-2">
                <i class="fa-solid fa-trash"></i>
            </a>
        </td>
    </tr>
@endforeach


<tr>
    <td></td>
    <td></td>
    <td>
        <div class="pagination m-0 float-right">
            {{ $models->links() }}
        </div>
    </td>
</tr>
