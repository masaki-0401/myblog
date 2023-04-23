<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $name;
    public $body;
    public $boardId;
    public $imageUrl; // 画像URLを追加

    public function __construct($name, $body, $boardId, $imageUrl) // 画像URLを追加
    {
        $this->name = $name;
        $this->body = $body;
        $this->boardId = $boardId;
        $this->imageUrl = $imageUrl; // 画像URLを追加
    }

    public function broadcastOn()
    {
        return new Channel('board-detail-chat-channel.' . $this->boardId);
    }
}
