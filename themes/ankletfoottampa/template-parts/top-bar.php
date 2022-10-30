<div class="top__bar bg-1 flex items-center">
    <div class="container mx-auto">
        <div class="flex flex-wrap px-4">
            <div class="w-full flex items-center justify-between">
                <?php $phone = get_field('phone', 'option');
                if ($phone) { ?>
                    <div class="top__bar__phone flex items-center justify-between">
                        <a class='flex items-center' href="tel:<?php echo sanitize_title($phone);  ?>">
                            <svg class='mr-2' width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H5.153C5.38971 2.00011 5.6187 2.08418 5.79924 2.23726C5.97979 2.39034 6.10018 2.6025 6.139 2.836L6.879 7.271C6.91436 7.48222 6.88097 7.69921 6.78376 7.89003C6.68655 8.08085 6.53065 8.23543 6.339 8.331L4.791 9.104C5.34611 10.4797 6.17283 11.7293 7.22178 12.7782C8.27072 13.8272 9.52035 14.6539 10.896 15.209L11.67 13.661C11.7655 13.4695 11.9199 13.3138 12.1106 13.2166C12.3012 13.1194 12.5179 13.0859 12.729 13.121L17.164 13.861C17.3975 13.8998 17.6097 14.0202 17.7627 14.2008C17.9158 14.3813 17.9999 14.6103 18 14.847V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H15C7.82 18 2 12.18 2 5V3Z" fill="#2A9D8F" />
                            </svg>
                            <?php echo $phone; ?>
                        </a>
                    </div>
                <?php
                }
                ?>

                <?php $email = get_field('email', 'option');
                if ($email) { ?>
                    <div class="top__bar__phone flex items-center justify-between">
                        <a class='flex items-center' href="<?php sanitize_email($email); ?>">
                            <svg class='mr-2' width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.00299 5.884L9.99999 9.882L17.997 5.884C17.9674 5.37444 17.7441 4.89549 17.3728 4.54523C17.0015 4.19497 16.5104 3.99991 16 4H3.99999C3.48958 3.99991 2.99844 4.19497 2.62717 4.54523C2.2559 4.89549 2.03259 5.37444 2.00299 5.884Z" fill="#2A9D8F" />
                                <path d="M18 8.11801L10 12.118L2 8.11801V14C2 14.5304 2.21071 15.0392 2.58579 15.4142C2.96086 15.7893 3.46957 16 4 16H16C16.5304 16 17.0391 15.7893 17.4142 15.4142C17.7893 15.0392 18 14.5304 18 14V8.11801Z" fill="#2A9D8F" />
                            </svg>
                            <?php echo $email; ?>
                        </a>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>