<div class="favorite-list-item">
    @if($user)

        <div data-id="{{ $user->id }}" data-action="0">
        <img src="/storage/{{($user->picture)}} " alt="picture" class="avatar av-m">
        </div>
        <p>{{ strlen($user->name) > 5 ? substr($user->name,0,6).'..' : $user->name }}</p>
    @endif
</div>
