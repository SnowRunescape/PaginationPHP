PaginationPHP
==========

Create a pagination
--------------

To paginate something:

    $pagination = new pagination($currentPage, $totalPages, 3);

PaginationPHP object
------------

    foreach($pagination->getData() as $page){
        echo '<a href="example.com/topic.php?page='.{$page}.'">'.{$page}.'</a>";
    }
