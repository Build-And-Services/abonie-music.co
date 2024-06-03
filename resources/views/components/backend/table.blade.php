<table id="datatable-buttons" class="table w-full pt-4 text-gray-700 dark:text-zinc-100 my-5">
    <thead>
        <tr>
            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">No.</th>
            @foreach ($columns as $column)
                <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">{{ ucfirst($column) }}
                </th>
            @endforeach
            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">Action</th>

        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
