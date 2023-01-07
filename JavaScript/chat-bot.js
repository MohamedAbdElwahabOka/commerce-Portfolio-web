window.watsonAssistantChatOptions = {
    integrationID: "3203d45e-dcbb-4113-b654-afca5b40d2aa", // The ID of this integration.
    region: "eu-gb", // The region your integration is hosted in.
    serviceInstanceID: "d154ee6c-ff7b-4f6a-9d43-3d119a24a1e8", // The ID of your service instance.
    onLoad: function (instance) {
        instance.render();
    }
};
setTimeout(function () {
    const t = document.createElement('script');
    t.src = "https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
});