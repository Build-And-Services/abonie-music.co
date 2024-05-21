<x-backend.dashboard-layout>
    <div class="container">
        @role('superadmin', 'admin')
            I am a writer!
        @else
            I am not a writer...
        @endrole
    </div>
</x-backend.dashboard-layout>