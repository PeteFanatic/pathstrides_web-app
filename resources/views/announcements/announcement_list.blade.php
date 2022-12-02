@foreach($announcements as $item)
   <!-- <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->ann_title }} </td>
        <td>{{ $item->location }} </td>
        <td>{{ $item->anns_lat }} , {{ $item->anns_long }} </td>
        <td>{{ $item->man_id }}</td>
    </tr> -->

    <a class="ann-link" href="{{ url('/announcement/' . $item->anns_id) }}">
    <div class="ann-task-list-con">
        <h4 class="ann-task-list-title">{{ $item->anns_title }}</h4>
        <p class="ann-task-desc">{{ $item->anns_desc }}</p>
    </div>
    </a>
@endforeach

<style>

    .ann-link{
        text-decoration: none;
        color: black;
        padding: 0;
    }

    .ann-link:hover{
        color: white;
        text-decoration: none;
    }

    .ann-link:visited{
        color: white;
        text-decoration: none;
    }

    .ann-task-list-con{
        background-color: white;
        border-radius: 5px;
        padding: 1em;
        margin-bottom: 0.5em;
        color: black;
    }

    .ann-task-list-con:hover{
        decoration: none;
        background-color: #FF7843;
        color: white;
    }

    .ann-task-desc{
        margin-bottom: 0;
        font-size: 11px;
    }

    .ann-task-list-title{
        font-size: 14px;
        font-weight: bold;
    }



</style>