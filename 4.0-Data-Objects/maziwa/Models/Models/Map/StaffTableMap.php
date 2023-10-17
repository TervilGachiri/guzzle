<?php

namespace Models\Map;

use Models\Staff;
use Models\StaffQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'staff' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class StaffTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'Models.Map.StaffTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'staff';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'Staff';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Models\\Staff';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'Models.Staff';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the id field
     */
    public const COL_ID = 'staff.id';

    /**
     * the column name for the lname field
     */
    public const COL_LNAME = 'staff.lname';

    /**
     * the column name for the fname field
     */
    public const COL_FNAME = 'staff.fname';

    /**
     * the column name for the short_bio field
     */
    public const COL_SHORT_BIO = 'staff.short_bio';

    /**
     * the column name for the user_image field
     */
    public const COL_USER_IMAGE = 'staff.user_image';

    /**
     * the column name for the linkedin field
     */
    public const COL_LINKEDIN = 'staff.linkedin';

    /**
     * the column name for the email_address field
     */
    public const COL_EMAIL_ADDRESS = 'staff.email_address';

    /**
     * the column name for the role field
     */
    public const COL_ROLE = 'staff.role';

    /**
     * the column name for the employment_date field
     */
    public const COL_EMPLOYMENT_DATE = 'staff.employment_date';

    /**
     * the column name for the status field
     */
    public const COL_STATUS = 'staff.status';

    /**
     * The default string format for model objects of the related table
     */
    public const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     *
     * @var array<string, mixed>
     */
    protected static $fieldNames = [
        self::TYPE_PHPNAME       => ['Id', 'Lname', 'Fname', 'ShortBio', 'UserImage', 'Linkedin', 'EmailAddress', 'Role', 'EmploymentDate', 'Status', ],
        self::TYPE_CAMELNAME     => ['id', 'lname', 'fname', 'shortBio', 'userImage', 'linkedin', 'emailAddress', 'role', 'employmentDate', 'status', ],
        self::TYPE_COLNAME       => [StaffTableMap::COL_ID, StaffTableMap::COL_LNAME, StaffTableMap::COL_FNAME, StaffTableMap::COL_SHORT_BIO, StaffTableMap::COL_USER_IMAGE, StaffTableMap::COL_LINKEDIN, StaffTableMap::COL_EMAIL_ADDRESS, StaffTableMap::COL_ROLE, StaffTableMap::COL_EMPLOYMENT_DATE, StaffTableMap::COL_STATUS, ],
        self::TYPE_FIELDNAME     => ['id', 'lname', 'fname', 'short_bio', 'user_image', 'linkedin', 'email_address', 'role', 'employment_date', 'status', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ]
    ];

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     *
     * @var array<string, mixed>
     */
    protected static $fieldKeys = [
        self::TYPE_PHPNAME       => ['Id' => 0, 'Lname' => 1, 'Fname' => 2, 'ShortBio' => 3, 'UserImage' => 4, 'Linkedin' => 5, 'EmailAddress' => 6, 'Role' => 7, 'EmploymentDate' => 8, 'Status' => 9, ],
        self::TYPE_CAMELNAME     => ['id' => 0, 'lname' => 1, 'fname' => 2, 'shortBio' => 3, 'userImage' => 4, 'linkedin' => 5, 'emailAddress' => 6, 'role' => 7, 'employmentDate' => 8, 'status' => 9, ],
        self::TYPE_COLNAME       => [StaffTableMap::COL_ID => 0, StaffTableMap::COL_LNAME => 1, StaffTableMap::COL_FNAME => 2, StaffTableMap::COL_SHORT_BIO => 3, StaffTableMap::COL_USER_IMAGE => 4, StaffTableMap::COL_LINKEDIN => 5, StaffTableMap::COL_EMAIL_ADDRESS => 6, StaffTableMap::COL_ROLE => 7, StaffTableMap::COL_EMPLOYMENT_DATE => 8, StaffTableMap::COL_STATUS => 9, ],
        self::TYPE_FIELDNAME     => ['id' => 0, 'lname' => 1, 'fname' => 2, 'short_bio' => 3, 'user_image' => 4, 'linkedin' => 5, 'email_address' => 6, 'role' => 7, 'employment_date' => 8, 'status' => 9, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Id' => 'ID',
        'Staff.Id' => 'ID',
        'id' => 'ID',
        'staff.id' => 'ID',
        'StaffTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'Lname' => 'LNAME',
        'Staff.Lname' => 'LNAME',
        'lname' => 'LNAME',
        'staff.lname' => 'LNAME',
        'StaffTableMap::COL_LNAME' => 'LNAME',
        'COL_LNAME' => 'LNAME',
        'Fname' => 'FNAME',
        'Staff.Fname' => 'FNAME',
        'fname' => 'FNAME',
        'staff.fname' => 'FNAME',
        'StaffTableMap::COL_FNAME' => 'FNAME',
        'COL_FNAME' => 'FNAME',
        'ShortBio' => 'SHORT_BIO',
        'Staff.ShortBio' => 'SHORT_BIO',
        'shortBio' => 'SHORT_BIO',
        'staff.shortBio' => 'SHORT_BIO',
        'StaffTableMap::COL_SHORT_BIO' => 'SHORT_BIO',
        'COL_SHORT_BIO' => 'SHORT_BIO',
        'short_bio' => 'SHORT_BIO',
        'staff.short_bio' => 'SHORT_BIO',
        'UserImage' => 'USER_IMAGE',
        'Staff.UserImage' => 'USER_IMAGE',
        'userImage' => 'USER_IMAGE',
        'staff.userImage' => 'USER_IMAGE',
        'StaffTableMap::COL_USER_IMAGE' => 'USER_IMAGE',
        'COL_USER_IMAGE' => 'USER_IMAGE',
        'user_image' => 'USER_IMAGE',
        'staff.user_image' => 'USER_IMAGE',
        'Linkedin' => 'LINKEDIN',
        'Staff.Linkedin' => 'LINKEDIN',
        'linkedin' => 'LINKEDIN',
        'staff.linkedin' => 'LINKEDIN',
        'StaffTableMap::COL_LINKEDIN' => 'LINKEDIN',
        'COL_LINKEDIN' => 'LINKEDIN',
        'EmailAddress' => 'EMAIL_ADDRESS',
        'Staff.EmailAddress' => 'EMAIL_ADDRESS',
        'emailAddress' => 'EMAIL_ADDRESS',
        'staff.emailAddress' => 'EMAIL_ADDRESS',
        'StaffTableMap::COL_EMAIL_ADDRESS' => 'EMAIL_ADDRESS',
        'COL_EMAIL_ADDRESS' => 'EMAIL_ADDRESS',
        'email_address' => 'EMAIL_ADDRESS',
        'staff.email_address' => 'EMAIL_ADDRESS',
        'Role' => 'ROLE',
        'Staff.Role' => 'ROLE',
        'role' => 'ROLE',
        'staff.role' => 'ROLE',
        'StaffTableMap::COL_ROLE' => 'ROLE',
        'COL_ROLE' => 'ROLE',
        'EmploymentDate' => 'EMPLOYMENT_DATE',
        'Staff.EmploymentDate' => 'EMPLOYMENT_DATE',
        'employmentDate' => 'EMPLOYMENT_DATE',
        'staff.employmentDate' => 'EMPLOYMENT_DATE',
        'StaffTableMap::COL_EMPLOYMENT_DATE' => 'EMPLOYMENT_DATE',
        'COL_EMPLOYMENT_DATE' => 'EMPLOYMENT_DATE',
        'employment_date' => 'EMPLOYMENT_DATE',
        'staff.employment_date' => 'EMPLOYMENT_DATE',
        'Status' => 'STATUS',
        'Staff.Status' => 'STATUS',
        'status' => 'STATUS',
        'staff.status' => 'STATUS',
        'StaffTableMap::COL_STATUS' => 'STATUS',
        'COL_STATUS' => 'STATUS',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
    {
        // attributes
        $this->setName('staff');
        $this->setPhpName('Staff');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Models\\Staff');
        $this->setPackage('Models');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('lname', 'Lname', 'VARCHAR', false, 100, null);
        $this->addColumn('fname', 'Fname', 'VARCHAR', false, 100, null);
        $this->addColumn('short_bio', 'ShortBio', 'LONGVARCHAR', false, null, null);
        $this->addColumn('user_image', 'UserImage', 'LONGVARCHAR', false, null, null);
        $this->addColumn('linkedin', 'Linkedin', 'LONGVARCHAR', false, null, null);
        $this->addColumn('email_address', 'EmailAddress', 'VARCHAR', false, 100, null);
        $this->addColumn('role', 'Role', 'VARCHAR', false, 10, null);
        $this->addColumn('employment_date', 'EmploymentDate', 'INTEGER', false, 4, null);
        $this->addColumn('status', 'Status', 'BOOLEAN', true, 1, true);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string|null The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): ?string
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? StaffTableMap::CLASS_DEFAULT : StaffTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array $row Row returned by DataFetcher->fetch().
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array (Staff object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = StaffTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = StaffTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + StaffTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = StaffTableMap::OM_CLASS;
            /** @var Staff $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            StaffTableMap::addInstanceToPool($obj, $key);
        }

        return [$obj, $col];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array<object>
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher): array
    {
        $results = [];

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = StaffTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = StaffTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Staff $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                StaffTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->addSelectColumn(StaffTableMap::COL_ID);
            $criteria->addSelectColumn(StaffTableMap::COL_LNAME);
            $criteria->addSelectColumn(StaffTableMap::COL_FNAME);
            $criteria->addSelectColumn(StaffTableMap::COL_SHORT_BIO);
            $criteria->addSelectColumn(StaffTableMap::COL_USER_IMAGE);
            $criteria->addSelectColumn(StaffTableMap::COL_LINKEDIN);
            $criteria->addSelectColumn(StaffTableMap::COL_EMAIL_ADDRESS);
            $criteria->addSelectColumn(StaffTableMap::COL_ROLE);
            $criteria->addSelectColumn(StaffTableMap::COL_EMPLOYMENT_DATE);
            $criteria->addSelectColumn(StaffTableMap::COL_STATUS);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.lname');
            $criteria->addSelectColumn($alias . '.fname');
            $criteria->addSelectColumn($alias . '.short_bio');
            $criteria->addSelectColumn($alias . '.user_image');
            $criteria->addSelectColumn($alias . '.linkedin');
            $criteria->addSelectColumn($alias . '.email_address');
            $criteria->addSelectColumn($alias . '.role');
            $criteria->addSelectColumn($alias . '.employment_date');
            $criteria->addSelectColumn($alias . '.status');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria Object containing the columns to remove.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(StaffTableMap::COL_ID);
            $criteria->removeSelectColumn(StaffTableMap::COL_LNAME);
            $criteria->removeSelectColumn(StaffTableMap::COL_FNAME);
            $criteria->removeSelectColumn(StaffTableMap::COL_SHORT_BIO);
            $criteria->removeSelectColumn(StaffTableMap::COL_USER_IMAGE);
            $criteria->removeSelectColumn(StaffTableMap::COL_LINKEDIN);
            $criteria->removeSelectColumn(StaffTableMap::COL_EMAIL_ADDRESS);
            $criteria->removeSelectColumn(StaffTableMap::COL_ROLE);
            $criteria->removeSelectColumn(StaffTableMap::COL_EMPLOYMENT_DATE);
            $criteria->removeSelectColumn(StaffTableMap::COL_STATUS);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.lname');
            $criteria->removeSelectColumn($alias . '.fname');
            $criteria->removeSelectColumn($alias . '.short_bio');
            $criteria->removeSelectColumn($alias . '.user_image');
            $criteria->removeSelectColumn($alias . '.linkedin');
            $criteria->removeSelectColumn($alias . '.email_address');
            $criteria->removeSelectColumn($alias . '.role');
            $criteria->removeSelectColumn($alias . '.employment_date');
            $criteria->removeSelectColumn($alias . '.status');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap(): TableMap
    {
        return Propel::getServiceContainer()->getDatabaseMap(StaffTableMap::DATABASE_NAME)->getTable(StaffTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a Staff or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or Staff object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StaffTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Models\Staff) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(StaffTableMap::DATABASE_NAME);
            $criteria->add(StaffTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = StaffQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            StaffTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                StaffTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the staff table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return StaffQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Staff or Criteria object.
     *
     * @param mixed $criteria Criteria or Staff object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StaffTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Staff object
        }

        if ($criteria->containsKey(StaffTableMap::COL_ID) && $criteria->keyContainsValue(StaffTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.StaffTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = StaffQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
