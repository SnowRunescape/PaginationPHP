PaginationPHP
==========

Create a pagination
--------------

To paginate something:

.. code-block:: php

    $pagination = new pagination($currentPage, $totalPages, 3);

PaginationPHP object
------------

.. code-block:: php
    foreach($pagination->getData() as $page){
        echo "<a href=\"example.com/topic.php?page={$page}\">{$page}</a>";
    }
