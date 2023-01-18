<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('home') }}" id="topnav-dashboard" role="button"
                        >
                            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('member.index') }}" id="topnav-dashboard" role="button"
                        >
                            <i class="bx bx-user me-2"></i><span key="t-dashboards">Members</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="javascript:void();" id="topnav-more" role="button"
                        >
                            <i class="bx bx-file me-2"></i><span key="t-extra-pages">Loan Management</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('loanscheme.index') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Loan Schemes</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('loanapplication.index') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Loan Application</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('loanactive.index') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Active Loans</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('emi.index') }}" id="topnav-dashboard" role="button"
                        >
                            <i class="bx bx-user me-2"></i><span key="t-dashboards">Loan EMI Collect</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="javascript:void();" id="topnav-more" role="button"
                        >
                            <i class="bx bx-file me-2"></i><span key="t-extra-pages">Master Entry</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('witnesstype.index') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Witness Type</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('expensecategory.index') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Expense Category</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('incomecategory.index') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Income Category</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('loanattribute.index') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Loan Attributes</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="javascript:void();" id="topnav-more" role="button"
                        >
                            <i class="bx bx-file me-2"></i><span key="t-extra-pages">Accounts</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('expense.index') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Expenses</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('income.index') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Income</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="javascript:void();" id="topnav-more" role="button"
                        >
                            <i class="bx bx-file me-2"></i><span key="t-extra-pages">Reports</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">General Ledger</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('reports.journal') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Journal</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Trial Balance</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('reports.income') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Income Statement</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="javascript:void();" id="topnav-more" role="button"
                        >
                            <i class="bx bx-file me-2"></i><span key="t-extra-pages">Settings</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('setting.general') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">General Settings</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('smtp') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">SMTP Setting</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('sms.gateway') }}" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">SMS Setting</span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Payment Gateway</span>
                                </a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>