<x-backend.dashboard-layout>
    <div class="container">
        @role('superadmin')
            I am a super-admin!
        @else
            I am not a super-admin...
        @endrole
    </div>
</x-backend.dashboard-layout>