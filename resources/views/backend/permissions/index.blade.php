<x-backend.dashboard-layout>
    <div class="container">
        @role('superadmin', 'admin')
            I am a superadmin!
        @else
            I am not a superadmin...
        @endrole
    </div>
</x-backend.dashboard-layout>