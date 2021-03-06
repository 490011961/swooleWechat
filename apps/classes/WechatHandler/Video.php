<?php
namespace App\WechatHandler;

/**
 * 链接消息处理
 * @package App\WechatHandler
 */
class Video extends Base implements InterfaceHandler
{
    /**
     * 主入口方法
     */
    public function main()
    {
        return '接受到视频消息';
    }

    /**
     * 保存消息记录
     */
    public function saveRecMessage()
    {
        $model = Model('WxRecMsgVideo');
        $data = [
            'MsgId' => $this->recMessage->MsgId ?? '',
            'MsgType' => $this->recMessage->MsgType ?? '',
            'ToUserName' => $this->recMessage->ToUserName ?? '',
            'FromUserName' => $this->recMessage->FromUserName ?? '',
            'CreateTime' => $this->recMessage->CreateTime ?? 0,
            'MediaId' => $this->recMessage->MediaId ?? '',
            'ThumbMediaId' => $this->recMessage->ThumbMediaId ?? '',
        ];
        return $model->put($data);
    }
}