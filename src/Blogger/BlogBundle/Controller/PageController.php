<?php

// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Import new namespaces
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;

class PageController extends Controller {

    public function indexAction() {

//        $em = $this->getDoctrine()
//                ->getEntityManager();
//
//        $blogs = $em->createQueryBuilder()
//                ->select('b')
//                ->from('BloggerBlogBundle:Blog', 'b')
//                ->addOrderBy('b.created', 'DESC')
//                ->getQuery()
//                ->getResult();

        $em = $this->getDoctrine()
                   ->getEntityManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
                    ->getLatestBlogs();
        //print_r($blogs);
        $data = array('blogs' => $blogs);
        return $this->render('BloggerBlogBundle:Page:index.html.twig', $data);
    }

    public function aboutAction() {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }

    public function contactAction() {

        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            //$form->bindRequest($request);
            $form->handleRequest($request);
            if ($form->isValid()) {


                $message = \Swift_Message::newInstance()
                        ->setSubject('Contact enquiry from symblog')
                        ->setFrom('kamrul.hasan@technovista.com.bd')
                        ->setTo('callkamrul@gmail.com')
                        ->setBody($this->renderView('BloggerBlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

                // Perform some action, such as sending an email
                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));
            }
        }

        $data = array(
            'form' => $form->createView()
        );

        return $this->render('BloggerBlogBundle:Page:contact.html.twig', $data);
    }
    
    public function sidebarAction()
{
    $em = $this->getDoctrine()
               ->getEntityManager();

    $tags = $em->getRepository('BloggerBlogBundle:Blog')
               ->getTags();

    $tagWeights = $em->getRepository('BloggerBlogBundle:Blog')
                     ->getTagWeights($tags);
    
    $commentLimit   = $this->container
                           ->getParameter('blogger_blog.comments.latest_comment_limit');
    $latestComments = $em->getRepository('BloggerBlogBundle:Comment')
                         ->getLatestComments($commentLimit);
    $data =  array(
        'latestComments'    => $latestComments,
        'tags' => $tagWeights
        
    );

    return $this->render('BloggerBlogBundle:Page:sidebar.html.twig', $data);
}

}
