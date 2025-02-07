let contTage = 1;
function MultiTage() {
  const theme = document.getElementById("formTage");
  if (!theme) {
    console.error("Element with ID 'formTheme' not found.");
    return;
  }

  // Create a new theme container
  const newtheme = document.createElement("div");
  newtheme.className = "relative space-y-4 mt-4";

  // Add inner HTML for new theme
  newtheme.innerHTML = `
          <input type="hidden" name="id" value="${contTage}">
             <div class="relative">
                <label for="Categorie_name" class="text-xs font-medium text-gray-600">categorie Name</label>
                <input type="text" name="categorie_name_${contTage}" id="tag_name" class="block w-full mt-1 px-3 py-1 text-sm bg-white border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500" placeholder="Enter tag name" required />
            </div>
            <div class="relative mb-4">
                  <label for="tag_color" class="block text-sm font-medium text-gray-700">
                    categorie Slogn
                  </label>
                  <input
                    type="text"
                    name="categorie_slogan_${contTage}"
                    id="tag_color"
                    class="block w-full mt-2 h-10 p-1 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500 cursor-pointer"
                    required
                  />
                </div>
    `;

  // Append the new theme to the container
  theme.appendChild(newtheme);

  // Increment the counter
  contTage++;
}
