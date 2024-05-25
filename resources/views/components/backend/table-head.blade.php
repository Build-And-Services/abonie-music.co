<thead>
    <tr>
        @foreach ($columns as $column)
            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">{{ ucfirst($column) }}</th>
        @endforeach
    </tr>
</thead>
