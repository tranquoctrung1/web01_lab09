<?php 

    class Product {
        var $id;
        var $num;
    }

    class ShoppingCart {
        var $listProduct;

        public function __construct()
        {
                $this->listProduct = array();
        }

        public function update($id, $newNum)
        {
            for($i = 0; i < count($this->listProduct); $i ++)
            {
                if($this->listProduct[$i]->id == $id)
                {
                    $this->listProduct[$i]->num = $newNum;
                }
            }
        }

        public function add($id)
        {
            if(count($this->listProduct) == 0)
            {
                $p = new Product();
                $p->id = $id;
                $p->num = 1;

                $this->listProduct[] = $p;
            }
            else 
            {
                for($i = 0; $i < count($this->listProduct); $i ++)
                {
                    if($this->listProduct[$i]->id == $i)
                    {
                        break;
                    }
                }
                if($i == count($this->listProduct))
                {
                    $p = new Product();
                    $p->id = $i;
                    $p->num = 1;

                    $this->listProduct[] = $p;
                }
                else 
                {
                    $this->listProduct[$i]->num++;
                }
            }
        }
    }

?> 