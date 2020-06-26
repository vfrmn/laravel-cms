
<tr class="py-5" >
    <td>{{$item->id}}</td>
    <td>{{$item->caption}}</td>
    <td>{{$item->title}}</td>
    <td>{{$item->intro}}</td>
    <td>{{$item->container_type}}</td>
    <td>{{$item->order_num}}</td>
    <td>{{$item->created_at}}</td>
    <td>{{$item->updated_at}}</td>
    <td>
        @if(!empty($item->children->all()))
        <a title="Дочірні елементи"  href="{{route('pages.index','parent='.$item->id)}}"><i class="fa fa-project-diagram text-dark"></i></a>
        @endif
    </td>
    <td>
        <a title="Перейти" target="_blank" href="{{route('pages.show', $item->id)}}"><i class="fa fa-eye text-success"></i></a>
    </td>
    <td>
        <a title="Редагувати" href="{{route('pages.edit', $item->id)}}"><i class="fa fa-edit" style="color: saddlebrown"></i></a>
    </td>
    <td>
        <form onsubmit="return confirm('Видалити запис і всі дочірні елементи?')" method="post" action="{{route('pages.destroy', $item->id)}}">
            @method('delete')
            @csrf
            <button title="Видалити" type="submit" class="border-0 bg-transparent " style="outline: none">
                <i class="fa fa-trash-alt text-danger"></i>
            </button>
        </form>
    </td>
</tr>

