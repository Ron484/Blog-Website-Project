

// for read more content

function displayContent(postId) {
    var hiddenContent = document.getElementById("hiddenContent_" + postId);
    hiddenContent.style.display = (hiddenContent.style.display === "none" || hiddenContent.style.display === "") ? "block" : "none";

     // Hide the "Read more" button
     var readMoreBtn = document.getElementById("readMoreBtn_" + postId);
     readMoreBtn.style.display = "none";

}



        //for comments
        function newComment() {
        var commentInput = document.getElementById("commentInput").value;
        if (commentInput.trim() !== "") {
            var commentsContainer = document.querySelector(".space-y-5");

            var newComment = document.createElement("div");
            newComment.classList.add("flex", "items-start", "border-b", "pb-5", "border-gray-200");

            newComment.innerHTML = `
                <div class="w-12 h-12 flex-shrink-0">
                    <img src="src/images/avatar.png" class="w-full">
                </div>
                <div class="flex-grow pl-4">
                    <h4 class="text-base font-roboto">Your Name</h4>
                    <p class="text-xs text-gray-400">Now</p>
                    <p class="text-sm font-600 mt-2">${commentInput}</p>
                    <div class="flex gap-2 mt-2">
                        <button onclick="toggleReplyForm(this)" class="text-gray-500 px-1 text-xs border border-gray-200 rounded-sm shadow-sm hover:bg-blue-500 hover:text-white transition">
                            Reply
                        </button>
                        <button class="text-gray-500 px-1 text-xs border border-gray-200 rounded-sm shadow-sm hover:bg-blue-500 hover:text-white transition">
                            Delete
                        </button>
                    </div>
                    <!-- Reply form -->
                    <div class="hidden mt-2" id="replyForm${commentsContainer.children.length + 1}">
                        <h5 class="text-base mb-1">Reply:</h5>
                        <textarea id="replyInput${commentsContainer.children.length + 1}" type="text" class="w-full border border-gray-200 py-3 px-5 text-sm rounded-sm h-20 focus:outline-none focus:border-gray-400" placeholder="Type your reply"></textarea>
                        <div class="mt-2">
                            <button onclick="submitReply(${commentsContainer.children.length + 1})" class="text-white py-1 px-3 rounded-sm uppercase text-sm bg-blue-500 border border-blue-500 hover:text-blue-500 hover:bg-transparent transition">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            `;

            commentsContainer.appendChild(newComment);

            // Clear the comment input
            document.getElementById("commentInput").value = "";
        }
    }

    // function toggleReplyForm(button) {
    //     var commentDiv = button.closest(".flex");
    //     var replyForm = commentDiv.querySelector(".hidden");
    //     replyForm.classList.toggle("hidden");
    // }

    // function submitReply(commentIndex) {
    //     var replyInput = document.getElementById(`replyInput${commentIndex}`).value;
    //     if (replyInput.trim() !== "") {
    //         var commentDiv = document.querySelector(`#replyForm${commentIndex}`).closest(".flex");

    //         var newReply = document.createElement("div");
    //         newReply.classList.add("flex", "items-start", "border-b", "pb-5", "border-gray-200");

    //         newReply.innerHTML = `
    //             <div class="w-12 h-12 flex-shrink-0">
    //                 <img src="src/images/avatar.png" class="w-full">
    //             </div>
    //             <div class="flex-grow pl-4">
    //                 <h4 class="text-base font-roboto">Your Name</h4>
    //                 <p class="text-xs text-gray-400">Now</p>
    //                 <p class="text-sm font-600 mt-2">${replyInput}</p>
    //                 <div class="flex gap-2 mt-2">
    //                     <button onclick="toggleReplyForm(this)" class="text-gray-500 px-1 text-xs border border-gray-200 rounded-sm shadow-sm hover:bg-blue-500 hover:text-white transition">
    //                         Reply
    //                     </button>
    //                     <button class="text-gray-500 px-1 text-xs border border-gray-200 rounded-sm shadow-sm hover:bg-blue-500 hover:text-white transition">
    //                         Delete
    //                     </button>
    //                 </div>
    //                 <!-- Reply form -->
    //                 <div class="hidden mt-2" id="replyForm${commentIndex + 1}">
    //                     <h5 class="text-base mb-1">Reply:</h5>
    //                     <textarea id="replyInput${commentIndex + 1}" type="text" class="w-full border border-gray-200 py-3 px-5 text-sm rounded-sm h-20 focus:outline-none focus:border-gray-400" placeholder="Type your reply"></textarea>
    //                     <div class="mt-2">
    //                         <button onclick="submitReply(${commentIndex + 1})" class="text-white py-1 px-3 rounded-sm uppercase text-sm bg-blue-500 border border-blue-500 hover:text-blue-500 hover:bg-transparent transition">
    //                             Submit
    //                         </button>
    //                     </div>
    //                 </div>
    //             </div>
    //         `;

    //         commentDiv.appendChild(newReply);

    //         // Clear the reply input
    //         document.getElementById(`replyInput${commentIndex}`).value = "";
    //     }
    // }
   