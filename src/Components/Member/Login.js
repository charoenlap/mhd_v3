import React, { Component } from "react";
import { Form, Input, Button, Image, Card, Layout, Row, Col } from "antd";
import { UserOutlined, LockOutlined } from "@ant-design/icons";
import { Link } from "react-router-dom";

const { Content } = Layout;

function signInWithEmailAndPassword(props) {
  console.log(`Sign ${props.email} ${props.password}`);
}

class Login extends Component {
  constructor(props) {
    super(props);

    this.state = {
      email: "",
      password: "",
    };
  }

  onChange = (e) => {
    const { name, value } = e.target;
    this.setState({
      [name]: value,
    });
  };

  onSubmit = (e) => {
    e.preventDefault();
    signInWithEmailAndPassword(this.state);
  };

  render() {
    // const onFinishFailed = (errorInfo) => {
    //   console.log("Failed:", errorInfo);
    // };
    return (
      <Layout>
        <Content className="bgLogin">
          <Row>
            <Col span={20} offset={2}>
              <Image src="/images/header.png" />
            </Col>
            <Col span={10} offset={7}>
              <Card
                title="เข้าสู่ระบบ"
                extra={<Link to="/register">สมัครสมาชิก</Link>}
              >
                <Form
                  id="formLogin"
                  name="normal_login"
                  className="login-form"
                  initialValues={{ remember: true }}
                  onSubmitCapture={this.onSubmit}
                >
                  <Form.Item
                    name="email"
                    rules={[
                      {
                        required: true,
                        message: "กรุณากรอกอีเมล!",
                      },
                    ]}
                  >
                    <Input
                      name="email"
                      type="email"
                      prefix={<UserOutlined className="site-form-item-icon" />}
                      placeholder="Email Address"
                      onChange={this.onChange}
                    />
                  </Form.Item>
                  <Form.Item
                    name="password"
                    rules={[
                      {
                        required: true,
                        message: "กรุณากรอกรหัสผ่าน!",
                      },
                    ]}
                  >
                    <Input
                      name="password"
                      prefix={<LockOutlined className="site-form-item-icon" />}
                      type="password"
                      placeholder="Password"
                      onChange={this.onChange}
                    />
                  </Form.Item>

                  <Form.Item>
                    <Button
                      type="primary"
                      form="formLogin"
                      key="submit"
                      htmlType="submit"
                    >
                      เข้าสู่ระบบ
                    </Button>
                    <br />
                    <Link to="/register">ลืมรหัสผ่าน</Link>
                  </Form.Item>
                </Form>
              </Card>
            </Col>
          </Row>
        </Content>
      </Layout>
    );
  }
}

export default Login;
