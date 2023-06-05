{{-- -------------------- Saved Messages -------------------- --}}
@if($get == 'saved')
    <table class="messenger-list-item" data-contact="{{ Auth::user()->id }}">
        <tr data-action="0">
            {{-- Avatar side --}}
            <td>
            <div class="saved-messages avatar av-m">
                <span class="far fa-bookmark"></span>
            </div>
            </td>
            {{-- center side --}}
            <td>
                <p data-id="{{ Auth::user()->id }}" data-type="user">Saved Messages <span>You</span></p>
                <span>Save messages secretly</span>
            </td>
        </tr>
    </table>
@endif

{{-- -------------------- Contact list -------------------- --}}
@if($get == 'contact')
<?php
$loggedInUserId = auth()->user()->id;

$users = \App\Models\User::where(function ($query) use ($loggedInUserId) {
    $query->whereExists(function ($subQuery) use ($loggedInUserId) {
        $subQuery->select(DB::raw(1))
            ->from('ch_messages')
            ->whereColumn('ch_messages.from_id', 'users.id')
            ->where('ch_messages.to_id', $loggedInUserId);
    })
    ->orWhereExists(function ($subQuery) use ($loggedInUserId) {
        $subQuery->select(DB::raw(1))
            ->from('ch_messages')
            ->whereColumn('ch_messages.to_id', 'users.id')
            ->where('ch_messages.from_id', $loggedInUserId);
    });
})
->where('id', '!=', $loggedInUserId)
->orderByDesc(function ($query) use ($loggedInUserId) {
    $query->select('created_at')
        ->from('ch_messages')
        ->whereColumn('ch_messages.from_id', 'users.id')
        ->orWhereColumn('ch_messages.to_id', 'users.id')
        ->orderByDesc('created_at')
        ->limit(1);
})
->get();
?>
@foreach ($users as $user)
        <table class="messenger-list-item" data-contact="{{ $user->id }}">
            <tr data-action="0">
                {{-- Avatar side --}}
                <td style="position: relative">
            @if($user->active_status)
                <span class="activeStatus"></span>
            @endif
        <img src="/storage/{{($user->picture)}} " alt="picture" class="avatar av-m">
        </td>
                {{-- center side --}}
                <td>
                    <p data-id="{{ $user->id }}" data-type="user">
                        {{ strlen($user->name) > 12 ? trim(substr($user->name, 0, 12)).'..' : $user->name }}
                    </p>
                </td>
            </tr>
        </table>
    @endforeach
@endif

@if($get == 'users' && !!$lastMessage)
<?php
$lastMessageBody = mb_convert_encoding($lastMessage->body, 'UTF-8', 'UTF-8');
$lastMessageBody = strlen($lastMessageBody) > 30 ? mb_substr($lastMessageBody, 0, 30, 'UTF-8').'..' : $lastMessageBody;
?>
<table class="messenger-list-item" data-contact="{{ $user->id }}">
    <tr data-action="0">
        {{-- Avatar side --}}
        <td style="position: relative">
            @if($user->active_status)
                <span class="activeStatus"></span>
            @endif
            <img src="/storage/{{($user->picture)}} " alt="picture" class="avatar av-m">
        </td>
        {{-- center side --}}
        <td>
        <p data-id="{{ $user->id }}" data-type="user">
            {{ strlen($user->name) > 12 ? trim(substr($user->name,0,12)).'..' : $user->name }}
            <span class="contact-item-time" data-time="{{$lastMessage->created_at}}">{{ $lastMessage->timeAgo }}</span></p>
        <span>
            {{-- Last Message user indicator --}}
            {!!
                $lastMessage->from_id == Auth::user()->id
                ? '<span class="lastMessageIndicator">You :</span>'
                : ''
            !!}
            {{-- Last message body --}}
            @if($lastMessage->attachment == null)
            {!!
                $lastMessageBody
            !!}
            @else
            <span class="fas fa-file"></span> Attachment
            @endif
        </span>
        {{-- New messages counter --}}
            {!! $unseenCounter > 0 ? "<b>".$unseenCounter."</b>" : '' !!}
        </td>
    </tr>
</table>
@endif

{{-- -------------------- Search Item -------------------- --}}
@if($get == 'search_item')
<table class="messenger-list-item" data-contact="{{ $user->id }}">
    <tr data-action="0">
        {{-- Avatar side --}}
        <td>
        <img src="/storage/{{($user->picture)}} " alt="picture" class="avatar av-m">
        </td>
        {{-- center side --}}
        <td>
            <p data-id="{{ $user->id }}" data-type="user">
            {{ strlen($user->name) > 12 ? trim(substr($user->name,0,12)).'..' : $user->name }}
        </td>

    </tr>
</table>
@endif

{{-- -------------------- Shared photos Item -------------------- --}}
@if($get == 'sharedPhoto')
<div class="shared-photo chat-image" style="background-image: url('{{ $image }}')"></div>
@endif


