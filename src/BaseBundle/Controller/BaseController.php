<?php
namespace BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use BaseBundle\Transport\BaseJSon;

class BaseController extends Controller
{
    protected function renderRequest(Request $request, $view, array $parameters = array(), Response $response = null, BaseJSon $jsData = null)
    {
        if ($request->isXmlHttpRequest()){//JSON
            $parameters["ajax"] = TRUE;
            if ($jsData == null){
                $jsData = new BaseJSon();
                $jsData->js = "";
                $jsData->data = "";
            }else{
                $jsData->success = TRUE;
            }
            $jsData->view = $this->renderView($view,$parameters);
            return new JsonResponse($jsData);
        }else{
            $parameters["ajax"] = FALSE;
            return $this->render($view,$parameters ,$response);
        }
    }
}
