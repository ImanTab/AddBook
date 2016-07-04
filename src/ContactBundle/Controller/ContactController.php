<?php

namespace ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ContactBundle\Entity\Contact;
use Symfony\Component\HttpFoundation\Response;
use ContactBundle\Form\Type\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactController extends Controller
{
  public function newAction(Request $request){

	   $contact = new Contact();
	   $form = $this->createForm(ContactType::class, $contact);

	   $form->handleRequest($request);

	   if ($form->isSubmitted() && $form->isValid()) {
		   $em = $this->getDoctrine()->getManager();
		   $em->persist($contact);
		   $em->flush();

		   return $this->redirectToRoute('contact_list');
	   }

	   return $this->render('ContactBundle:Contact_view:Contact_new.html.twig', array('form' => $form->createView()));
	}

	public function listAction()
	{
		$contact = $this->getDoctrine()->getRepository('ContactBundle:Contact')->findAll();
		// var_dump($contact);
	//	$contact = array('firstname' => 'Manal', 'lastname' => 'Tab');

  		if (!$contact)
		{
	  		throw $this->createNotFoundException('No contact found');
  		}
		return $this->render('ContactBundle:Contact_view:Contact_list.html.twig', array ('contact' => $contact));

	}

	public function showAction($contactId)
	{
		$contact = $this->getDoctrine()->getRepository('ContactBundle:Contact')->findOneById($contactId);
		//var_dump($contact);
	//	$contact = array('firstname' => 'Manal', 'lastname' => 'Tab');

  		if (!$contact)
		{
	  		throw $this->createNotFoundException('No contact found');
  		}
		return $this->render('ContactBundle:Contact_view:Contact_show.html.twig', array ('contact' => $contact));

	}

  public function editAction($contactId, Request $request)
  {
      $em = $this->getDoctrine()->getManager();
      $contact = $em->getRepository('ContactBundle:Contact')->find($contactId);

      if (!$contact) {
          throw $this->createNotFoundException(
              'No contact found for id '.$contactId
          );
      }
      $form = $this->createForm(ContactType::class, $contact);

      $form->handleRequest($request);

      if ($form->isValid())
      {
        $em->flush();
        return $this->redirectToRoute('contact_list');
      }

      return $this->render('ContactBundle:Contact_view:Contact_edit.html.twig', array('form' => $form->createView(),
    'contact' => $contact));
  }

  public function deleteAction($contactId)
  {
      $em = $this->getDoctrine()->getManager();
      $contact = $em->getRepository('ContactBundle:Contact')->find($contactId);

      if (!$contact)
      {
          throw $this->createNotFoundException(
              'No contact found for id '.$contactId
          );
      }
      $em->remove($contact);
      $em->flush();
      return $this->redirectToRoute('contact_list');
   }

}
