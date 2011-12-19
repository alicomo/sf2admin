
    /**
     * default theme
     * Lists all {{ entity }} entities.
     *
{% if 'annotation' == format %}
     * @Route("/", name="{{ route_name_prefix }}")
     * @Template()
{% endif %}
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $limit = 5;
        $dql = $em->createQueryBuilder()
                ->add('select', 'p')
                ->add('from', '{{ bundle }}:{{ entity }} e');
        $query = $em->createQuery($dql);

        $adapter = new DoctrineORMAdapter($query);
        $pager = new Pagerfanta($adapter);
        $pager->setMaxPerPage($limit);
        $pager->setCurrentPage($page);
        $entities = $pager->getCurrentPageResults();
{% if 'annotation' == format %}
        return array('entities' => $entities);
{% else %}
        return $this->render('{{ bundle }}:{{ entity|replace({'\\': '/'}) }}:index.html.twig', array(
            'entities' => $entities
        ));
{% endif %}
    }
