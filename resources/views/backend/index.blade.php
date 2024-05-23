<x-backend.dashboard-layout>
    <div class="container">
        @role('superadmin')
            I am a super-admin!
        @else
            I am not a super-admin...
        @endrole
        <h1>
            {{ Auth::user()->roles[0]->name }}
        </h1>
    </div>
</x-backend.dashboard-layout>