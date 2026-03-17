<?php
include '../../config/db.php';
$title = "BASC LSMS | Users";
$cssPath = '../../assets/css/output.css';
$flowbiteJsPath = '../../assets/js/flowbite.min.js';
$iconPath = '../../assets/imgs/lib-logo-no-bg.png';
$DTJsPath = '../../assets/js/simple-datatables.js';

include '../../partials/__header.php';
include '../../middleware/verifyUser.php';
include '../../components/addUser.php';
include '../../components/alerts.php';
verifyUser();

?>

    <!-- navbar -->
    <?php require '../../components/navbar.php'?>
    
    <!-- sidebar -->
    <?php require '../../components/sidebar.php'?>

    <main class="p-4 md:ml-64 h-auto pt-20 bg-muted dark:bg-gray-900 min-h-screen">
       <div class="w-full p-6 flex flex-col gap-6 text-gray-800 dark:text-gray-200 ">
        <div class="flex w-full items-center justify-between">
          <h1 class=" font-semibold text-xl">Manage Admins</h1>
          <button type="button"  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-white bg-success box-border border border-transparent hover:bg-success-strong focus:ring-4 focus:ring-success-medium shadow-xs font-medium leading-5 rounded-base text-sm px-2 py-1 focus:outline-none cursor-pointer">
            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
            </svg>
          </button>
        </div>
          
          <div class="w-full p-6 bg-white dark:bg-gray-800  shadow-md rounded-lg">
            <table id="search-table" class="dark:text-gray-200">
                <thead>
                    <tr>
                        <th class="dark:bg-gray-800 dark:text-gray-200">
                            <span class="flex items-center">
                                Name
                            </span>
                        </th>
                        <th class="dark:bg-gray-800 dark:text-gray-200">
                            <span class="flex items-center">
                                Email
                            </span>
                        </th>
                        <th class="dark:bg-gray-800 dark:text-gray-200">
                            <span class="flex items-center">
                                Status
                            </span>
                        </th>
                        <th class="dark:bg-gray-800 dark:text-gray-200">
                            <span class="flex items-center">
                                Action
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $stmt = $conn->prepare("SELECT * FROM users WHERE id != ?");
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                  ?>
                    <tr>
                        <td class="font-medium text-heading dark:text-gray-200 whitespace-nowrap"><?= $row['name'] ?></td>
                        <td class="dark:text-gray-200"><?= $row['email'] ?></td>
                        <td class="dark:text-gray-200">
                          <span class="<?= $row['status'] == 'active' ? 'bg-success-soft text-fg-success-strong' : 'bg-warning-soft text-fg-warning' ?>  text-xs font-medium px-1.5 py-0.5 rounded"><?= $row['status'] ?? 'Disabled' ?></span>
                        </td>
                        <td class="dark:text-gray-200">
                          <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="status" value="active" class="sr-only peer" <?= $row['status'] == 'active' ? 'checked' : '' ?> onchange="toggleStatus(<?= $row['id'] ?>, this)">
                            <div class="relative w-9 h-5 bg-neutral-quaternary peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-brand-soft dark:peer-focus:ring-brand-soft rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-buffer after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-brand"></div>
                            <span class="select-none ms-3 text-sm font-medium"><?= $row['status'] == 'active' ? 'Deactivate' : 'Activate' ?></span>
                          </label>
                        </td>
                    </tr>
                  <?php
                        }
                    }
                    $stmt->close();
                  ?>
                   
                </tbody>
            </table>
          </div>
                
       </div>

       <script>

        function toggleStatus(id, checkbox){
          const status = checkbox.checked ? 'active' : 'inactive';

          fetch(`../../api/toggleStatus.php?id=${id}&status=${status}`)
          .then(() => {
              window.location.href='users.php'
          });
      }
       </script>
    </main>


<?php
require '../../partials/__footer.php';
?>