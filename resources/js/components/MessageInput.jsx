import React, {useState} from "react";

const MessageInput = ({rootUrl}) => {
    const [message, setMessage] = useState("");
    const [isButtonDisabled, setIsButtonDisabled] = useState(true);

    const messageRequest = async (text) => {
        try {
            await axios.post(`${rootUrl}/message`, {
                message: text,
            });
        } catch (err) {
            console.log(err.message);
        }
    };

    const sendMessage = (e) => {
        e.preventDefault();
        if (message.trim() === "") {
            alert("Please enter a message!");
            return;
        }

        messageRequest(message).then(r => {
        });
        setMessage("");
        setIsButtonDisabled(true);
    };

    const handleInputChange = (e) => {
        const newMessage = e.target.value;
        setMessage(newMessage);
        setIsButtonDisabled(newMessage.trim().length === 0);
    };

    function handleKeyDown(event) {
        if (event.keyCode === 13) {
            sendMessage(event);
        }
    }

    return (
        <div className="flex items-center space-x-2">
            <input
                onChange={(e) => handleInputChange(e)}
                autoComplete="off"
                type="text"
                className="flex-1 p-2 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100"
                placeholder="Message..."
                value={message}
                onKeyDown={(e) => handleKeyDown(e)}
            />
            <button
                onClick={(e) => sendMessage(e)}
                className={`px-4 py-2 ${isButtonDisabled ? 'bg-blue-300 dark:bg-blue-500' : 'bg-blue-500 dark:bg-blue-700'} text-white rounded-lg cursor-pointer hover:bg-blue-700 dark:hover:bg-blue-800`}
                disabled={isButtonDisabled}
                type="button"
            >
                Send
            </button>
        </div>
    );
};

export default MessageInput;
