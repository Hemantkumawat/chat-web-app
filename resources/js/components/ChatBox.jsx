import React, {useEffect, useRef, useState} from "react";
import Message from "./Message.jsx";
import MessageInput from "./MessageInput.jsx";

const ChatBox = ({rootUrl}) => {
    const userData = document.getElementById('main')
        .getAttribute('data-user');

    const user = JSON.parse(userData);
    // `App.Models.User.${user.id}`;
    const webSocketChannel = `channel_for_everyone`;

    const [messages, setMessages] = useState([]);
    const scroll = useRef();

    const scrollToBottom = () => {
        scroll.current.scrollIntoView({behavior: "smooth"});
    };

    const connectWebSocket = () => {
        window.Echo.private(webSocketChannel)
            .listen('GotMessage', async (e) => {
                // e.message
                // console.log(e);
                await getMessages();
            });
    }

    const getMessages = async () => {
        try {
            const m = await axios.get(`${rootUrl}/messages`);
            setMessages(m.data);
            setTimeout(scrollToBottom, 0);
        } catch (err) {
            console.log(err.message);
        }
    };

    useEffect(() => {
        getMessages().then(r => {
        });
        connectWebSocket();

        return () => {
            window.Echo.leave(webSocketChannel);
        }
    }, []);

    return (
        <div className="flex justify-center">
            <div className="w-full max-w-2xl rounded-lg border-gray-300 dark:border-gray-100">
                <div className="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                    <div className="bg-gray-800 dark:bg-gray-900 text-white px-4 py-2">
                        Chat Box
                    </div>
                    <div className="p-4 h-96 overflow-y-auto">
                        {messages?.map((message) => (
                            <Message key={message.id} userId={user.id} message={message}/>
                        ))}
                        <span ref={scroll}></span>
                    </div>
                    <div className="bg-gray-100 dark:bg-gray-700 p-4">
                        <MessageInput rootUrl={rootUrl}/>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default ChatBox;
