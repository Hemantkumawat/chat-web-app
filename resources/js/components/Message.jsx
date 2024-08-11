import React from "react";

const Message = ({userId, message}) => {
    return (
        <div className={`flex ${userId == message.sender_id ? "justify-end" : ""}`} sender-id={message.sender_id}
             user-id={userId}>
            <div className="w-full max-w-md">
                <small className="text-gray-500 dark:text-gray-400">
                    <strong>{message?.sender?.name} </strong>
                </small>
                <small className="text-gray-500 dark:text-gray-400 float-right">
                    {message.time}
                </small>
                <div
                    className={`px-2 py-1 ${userId === message.sender_id ? "bg-blue-500 dark:bg-blue-700 text-white rounded-s-md rounded-tr-md" : "bg-gray-500 dark:bg-gray-700 text-black dark:text-white rounded-e-md rounded-tl-md"}`}
                    role="alert">
                    {message?.message}
                </div>
            </div>
        </div>
    );
};

export default Message;
