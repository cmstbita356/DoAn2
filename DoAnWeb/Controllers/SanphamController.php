include_once "../Models/SanphamModel.php";

class SanphamController
{
    public $model;
    function __construct()
    {
        this->model = new SanphamModel();
    }
    function invoke()
    {
        if(isset($_GET['keyword']))
        {

        }
        else 
        {
            if(isset($_GET['time']), isset($_GET['maker']), isset($_GET['price']))
            {
                
            }
            else
            {
                $page = isset($_GET["page"])? $_GET["page"]:1;
                $page = is_numeric($page)?$page : 1;
                $pagesize = 6;
                $from = ($page-1)*$pagesize;
                $ListProduct = $this->model->getProductListLimited($from, $pagesize);
                $total = ceil($this->model->CountAll()/$pagesize); 
            }
        }

        
    }
}