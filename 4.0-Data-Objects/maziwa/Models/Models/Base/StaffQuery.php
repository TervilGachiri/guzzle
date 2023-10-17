<?php

namespace Models\Base;

use \Exception;
use \PDO;
use Models\Staff as ChildStaff;
use Models\StaffQuery as ChildStaffQuery;
use Models\Map\StaffTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `staff` table.
 *
 * @method     ChildStaffQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildStaffQuery orderByLname($order = Criteria::ASC) Order by the lname column
 * @method     ChildStaffQuery orderByFname($order = Criteria::ASC) Order by the fname column
 * @method     ChildStaffQuery orderByShortBio($order = Criteria::ASC) Order by the short_bio column
 * @method     ChildStaffQuery orderByUserImage($order = Criteria::ASC) Order by the user_image column
 * @method     ChildStaffQuery orderByLinkedin($order = Criteria::ASC) Order by the linkedin column
 * @method     ChildStaffQuery orderByEmailAddress($order = Criteria::ASC) Order by the email_address column
 * @method     ChildStaffQuery orderByRole($order = Criteria::ASC) Order by the role column
 * @method     ChildStaffQuery orderByEmploymentDate($order = Criteria::ASC) Order by the employment_date column
 * @method     ChildStaffQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method     ChildStaffQuery groupById() Group by the id column
 * @method     ChildStaffQuery groupByLname() Group by the lname column
 * @method     ChildStaffQuery groupByFname() Group by the fname column
 * @method     ChildStaffQuery groupByShortBio() Group by the short_bio column
 * @method     ChildStaffQuery groupByUserImage() Group by the user_image column
 * @method     ChildStaffQuery groupByLinkedin() Group by the linkedin column
 * @method     ChildStaffQuery groupByEmailAddress() Group by the email_address column
 * @method     ChildStaffQuery groupByRole() Group by the role column
 * @method     ChildStaffQuery groupByEmploymentDate() Group by the employment_date column
 * @method     ChildStaffQuery groupByStatus() Group by the status column
 *
 * @method     ChildStaffQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildStaffQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildStaffQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildStaffQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildStaffQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildStaffQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildStaff|null findOne(?ConnectionInterface $con = null) Return the first ChildStaff matching the query
 * @method     ChildStaff findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildStaff matching the query, or a new ChildStaff object populated from the query conditions when no match is found
 *
 * @method     ChildStaff|null findOneById(int $id) Return the first ChildStaff filtered by the id column
 * @method     ChildStaff|null findOneByLname(string $lname) Return the first ChildStaff filtered by the lname column
 * @method     ChildStaff|null findOneByFname(string $fname) Return the first ChildStaff filtered by the fname column
 * @method     ChildStaff|null findOneByShortBio(string $short_bio) Return the first ChildStaff filtered by the short_bio column
 * @method     ChildStaff|null findOneByUserImage(string $user_image) Return the first ChildStaff filtered by the user_image column
 * @method     ChildStaff|null findOneByLinkedin(string $linkedin) Return the first ChildStaff filtered by the linkedin column
 * @method     ChildStaff|null findOneByEmailAddress(string $email_address) Return the first ChildStaff filtered by the email_address column
 * @method     ChildStaff|null findOneByRole(string $role) Return the first ChildStaff filtered by the role column
 * @method     ChildStaff|null findOneByEmploymentDate(int $employment_date) Return the first ChildStaff filtered by the employment_date column
 * @method     ChildStaff|null findOneByStatus(boolean $status) Return the first ChildStaff filtered by the status column
 *
 * @method     ChildStaff requirePk($key, ?ConnectionInterface $con = null) Return the ChildStaff by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStaff requireOne(?ConnectionInterface $con = null) Return the first ChildStaff matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStaff requireOneById(int $id) Return the first ChildStaff filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStaff requireOneByLname(string $lname) Return the first ChildStaff filtered by the lname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStaff requireOneByFname(string $fname) Return the first ChildStaff filtered by the fname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStaff requireOneByShortBio(string $short_bio) Return the first ChildStaff filtered by the short_bio column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStaff requireOneByUserImage(string $user_image) Return the first ChildStaff filtered by the user_image column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStaff requireOneByLinkedin(string $linkedin) Return the first ChildStaff filtered by the linkedin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStaff requireOneByEmailAddress(string $email_address) Return the first ChildStaff filtered by the email_address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStaff requireOneByRole(string $role) Return the first ChildStaff filtered by the role column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStaff requireOneByEmploymentDate(int $employment_date) Return the first ChildStaff filtered by the employment_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStaff requireOneByStatus(boolean $status) Return the first ChildStaff filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStaff[]|Collection find(?ConnectionInterface $con = null) Return ChildStaff objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildStaff> find(?ConnectionInterface $con = null) Return ChildStaff objects based on current ModelCriteria
 *
 * @method     ChildStaff[]|Collection findById(int|array<int> $id) Return ChildStaff objects filtered by the id column
 * @psalm-method Collection&\Traversable<ChildStaff> findById(int|array<int> $id) Return ChildStaff objects filtered by the id column
 * @method     ChildStaff[]|Collection findByLname(string|array<string> $lname) Return ChildStaff objects filtered by the lname column
 * @psalm-method Collection&\Traversable<ChildStaff> findByLname(string|array<string> $lname) Return ChildStaff objects filtered by the lname column
 * @method     ChildStaff[]|Collection findByFname(string|array<string> $fname) Return ChildStaff objects filtered by the fname column
 * @psalm-method Collection&\Traversable<ChildStaff> findByFname(string|array<string> $fname) Return ChildStaff objects filtered by the fname column
 * @method     ChildStaff[]|Collection findByShortBio(string|array<string> $short_bio) Return ChildStaff objects filtered by the short_bio column
 * @psalm-method Collection&\Traversable<ChildStaff> findByShortBio(string|array<string> $short_bio) Return ChildStaff objects filtered by the short_bio column
 * @method     ChildStaff[]|Collection findByUserImage(string|array<string> $user_image) Return ChildStaff objects filtered by the user_image column
 * @psalm-method Collection&\Traversable<ChildStaff> findByUserImage(string|array<string> $user_image) Return ChildStaff objects filtered by the user_image column
 * @method     ChildStaff[]|Collection findByLinkedin(string|array<string> $linkedin) Return ChildStaff objects filtered by the linkedin column
 * @psalm-method Collection&\Traversable<ChildStaff> findByLinkedin(string|array<string> $linkedin) Return ChildStaff objects filtered by the linkedin column
 * @method     ChildStaff[]|Collection findByEmailAddress(string|array<string> $email_address) Return ChildStaff objects filtered by the email_address column
 * @psalm-method Collection&\Traversable<ChildStaff> findByEmailAddress(string|array<string> $email_address) Return ChildStaff objects filtered by the email_address column
 * @method     ChildStaff[]|Collection findByRole(string|array<string> $role) Return ChildStaff objects filtered by the role column
 * @psalm-method Collection&\Traversable<ChildStaff> findByRole(string|array<string> $role) Return ChildStaff objects filtered by the role column
 * @method     ChildStaff[]|Collection findByEmploymentDate(int|array<int> $employment_date) Return ChildStaff objects filtered by the employment_date column
 * @psalm-method Collection&\Traversable<ChildStaff> findByEmploymentDate(int|array<int> $employment_date) Return ChildStaff objects filtered by the employment_date column
 * @method     ChildStaff[]|Collection findByStatus(boolean|array<boolean> $status) Return ChildStaff objects filtered by the status column
 * @psalm-method Collection&\Traversable<ChildStaff> findByStatus(boolean|array<boolean> $status) Return ChildStaff objects filtered by the status column
 *
 * @method     ChildStaff[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildStaff> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class StaffQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Models\Base\StaffQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Models\\Staff', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildStaffQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildStaffQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildStaffQuery) {
            return $criteria;
        }
        $query = new ChildStaffQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildStaff|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(StaffTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = StaffTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildStaff A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, lname, fname, short_bio, user_image, linkedin, email_address, role, employment_date, status FROM staff WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildStaff $obj */
            $obj = new ChildStaff();
            $obj->hydrate($row);
            StaffTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @return ChildStaff|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param array $keys Primary keys to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        $this->addUsingAlias(StaffTableMap::COL_ID, $key, Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        $this->addUsingAlias(StaffTableMap::COL_ID, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterById($id = null, ?string $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(StaffTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(StaffTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StaffTableMap::COL_ID, $id, $comparison);

        return $this;
    }

    /**
     * Filter the query on the lname column
     *
     * Example usage:
     * <code>
     * $query->filterByLname('fooValue');   // WHERE lname = 'fooValue'
     * $query->filterByLname('%fooValue%', Criteria::LIKE); // WHERE lname LIKE '%fooValue%'
     * $query->filterByLname(['foo', 'bar']); // WHERE lname IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLname($lname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StaffTableMap::COL_LNAME, $lname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the fname column
     *
     * Example usage:
     * <code>
     * $query->filterByFname('fooValue');   // WHERE fname = 'fooValue'
     * $query->filterByFname('%fooValue%', Criteria::LIKE); // WHERE fname LIKE '%fooValue%'
     * $query->filterByFname(['foo', 'bar']); // WHERE fname IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $fname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFname($fname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StaffTableMap::COL_FNAME, $fname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the short_bio column
     *
     * Example usage:
     * <code>
     * $query->filterByShortBio('fooValue');   // WHERE short_bio = 'fooValue'
     * $query->filterByShortBio('%fooValue%', Criteria::LIKE); // WHERE short_bio LIKE '%fooValue%'
     * $query->filterByShortBio(['foo', 'bar']); // WHERE short_bio IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $shortBio The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByShortBio($shortBio = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortBio)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StaffTableMap::COL_SHORT_BIO, $shortBio, $comparison);

        return $this;
    }

    /**
     * Filter the query on the user_image column
     *
     * Example usage:
     * <code>
     * $query->filterByUserImage('fooValue');   // WHERE user_image = 'fooValue'
     * $query->filterByUserImage('%fooValue%', Criteria::LIKE); // WHERE user_image LIKE '%fooValue%'
     * $query->filterByUserImage(['foo', 'bar']); // WHERE user_image IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $userImage The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUserImage($userImage = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userImage)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StaffTableMap::COL_USER_IMAGE, $userImage, $comparison);

        return $this;
    }

    /**
     * Filter the query on the linkedin column
     *
     * Example usage:
     * <code>
     * $query->filterByLinkedin('fooValue');   // WHERE linkedin = 'fooValue'
     * $query->filterByLinkedin('%fooValue%', Criteria::LIKE); // WHERE linkedin LIKE '%fooValue%'
     * $query->filterByLinkedin(['foo', 'bar']); // WHERE linkedin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $linkedin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLinkedin($linkedin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($linkedin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StaffTableMap::COL_LINKEDIN, $linkedin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the email_address column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailAddress('fooValue');   // WHERE email_address = 'fooValue'
     * $query->filterByEmailAddress('%fooValue%', Criteria::LIKE); // WHERE email_address LIKE '%fooValue%'
     * $query->filterByEmailAddress(['foo', 'bar']); // WHERE email_address IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $emailAddress The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByEmailAddress($emailAddress = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailAddress)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StaffTableMap::COL_EMAIL_ADDRESS, $emailAddress, $comparison);

        return $this;
    }

    /**
     * Filter the query on the role column
     *
     * Example usage:
     * <code>
     * $query->filterByRole('fooValue');   // WHERE role = 'fooValue'
     * $query->filterByRole('%fooValue%', Criteria::LIKE); // WHERE role LIKE '%fooValue%'
     * $query->filterByRole(['foo', 'bar']); // WHERE role IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $role The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRole($role = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($role)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StaffTableMap::COL_ROLE, $role, $comparison);

        return $this;
    }

    /**
     * Filter the query on the employment_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEmploymentDate(1234); // WHERE employment_date = 1234
     * $query->filterByEmploymentDate(array(12, 34)); // WHERE employment_date IN (12, 34)
     * $query->filterByEmploymentDate(array('min' => 12)); // WHERE employment_date > 12
     * </code>
     *
     * @param mixed $employmentDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByEmploymentDate($employmentDate = null, ?string $comparison = null)
    {
        if (is_array($employmentDate)) {
            $useMinMax = false;
            if (isset($employmentDate['min'])) {
                $this->addUsingAlias(StaffTableMap::COL_EMPLOYMENT_DATE, $employmentDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($employmentDate['max'])) {
                $this->addUsingAlias(StaffTableMap::COL_EMPLOYMENT_DATE, $employmentDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StaffTableMap::COL_EMPLOYMENT_DATE, $employmentDate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(true); // WHERE status = true
     * $query->filterByStatus('yes'); // WHERE status = true
     * </code>
     *
     * @param bool|string $status The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStatus($status = null, ?string $comparison = null)
    {
        if (is_string($status)) {
            $status = in_array(strtolower($status), array('false', 'off', '-', 'no', 'n', '0', ''), true) ? false : true;
        }

        $this->addUsingAlias(StaffTableMap::COL_STATUS, $status, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildStaff $staff Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($staff = null)
    {
        if ($staff) {
            $this->addUsingAlias(StaffTableMap::COL_ID, $staff->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the staff table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StaffTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StaffTableMap::clearInstancePool();
            StaffTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StaffTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(StaffTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            StaffTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            StaffTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
